<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Kid extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function allergies()
    {
        return $this->hasMany('App\Models\Allergy');
    }

    public function package()
    {
        return $this->belongsTo('App\Models\Package');
    }

    public function guardians()
    {
        return $this->belongsToMany('App\Models\Guardian', 'guardian_kid');
    }

}
