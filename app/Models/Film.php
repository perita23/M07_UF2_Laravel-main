<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Film extends Model
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

    public function actors(): BelongsToMany{
        return $this->belongsToMany(actor::class);
    }

    public function audiences(): BelongsTo{
        return $this->belongsTo(Audience::class);
    }
}