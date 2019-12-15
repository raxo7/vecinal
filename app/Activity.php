<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'name',
        'sub_title',
        'activity_date',
        'description',
        'image',
        'type_id'
    ];
}
