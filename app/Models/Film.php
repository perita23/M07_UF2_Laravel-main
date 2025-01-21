<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    use HasFactory;

    protected $table = 'films';
    protected $fillable = [
        'name',
        'year',
        'genre',
        'country',
        'duration',
        'img_url'
    ];



}