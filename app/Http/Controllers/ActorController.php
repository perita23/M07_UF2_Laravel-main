<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use DateInterval;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Date;

use function PHPUnit\Framework\returnSelf;

class ActorController extends Controller
{
    public function readActors(): Collection
    {
        return actor::all();
    }

    public function countActors()
    {
        $actors = ActorController::readActors();
        $actorsCount = count($actors);
        return view('actors.count', ["count" => $actorsCount]);
    }


    protected function isActor($name)
    {
        if (Actor::where("name", "=", $name)->exists()) {
            return true;
        }
        return false;
    }

    public function addActors(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string',
                'surname' => 'required|string',
                'birthdate' => 'required|date',
                'country' => 'required|string',
                'img_url' => 'required',
            ]

        );

        if ($this->isActor($request['name'])) {
            return; //Return a view like 'return view("films.addFilm",["exist" => true,"invalidUrl"=>false]);'
        }

        Actor::create(
            [
                'name' => $request->input('name'),
                'surname' => $request->input('surname'),
                'birthdate' => $request->input('birthdate'),
                'country' => $request->input('country'),
                'img_url' => $request->input('img_url'),
            ]
        );

        return view('welcome');
    }

    public function deleteActor($actorId = null)
    {
        if (!Actor::find($actorId)) {
            return response()->json(false, 404);
        }

        try {
            Actor::destroy($actorId);
            $deleted = !Actor::find($actorId);
            $status = $deleted ? 200 : 500;
        } catch (Exception $e) {
            return response()->json(false, 500);
        }

        return response()->json(true, $status);
    }


    public function listActor(Request $request)
    {
        $decade = $request['decade'];
        $actors = $this->readActors();

        if ($decade) {
            $years = explode('-', $decade);
            $startYear = (int) $years[0];
            $endYear = (int) $years[1];

            $startDate = (new \DateTime())->setDate($startYear, 1, 1)->format('Y');
            $endDate = (new \DateTime())->setDate($endYear, 12, 31)->format('Y');

            $actors = $actors->filter(function ($actors) use ($startDate, $endDate) {
                return $actors->birthdate >= $startDate && $actors->birthdate <= $endDate;
            });
        }
        return view('actors.list', ['actors' => $actors]);
    }
}
