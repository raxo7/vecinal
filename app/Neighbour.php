<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Neighbour extends Model
{
    protected $fillable = [
        'rut',
        'name',
        'father_last_name',
        'mother_last_name',
        'birthdate',
        'genre_id',
        'nationality_id',
        'marital_state_id',
        'city_id',
        'village_id',
        'street_name',
        'street_number'
    ];
}
