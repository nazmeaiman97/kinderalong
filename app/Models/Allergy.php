<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergy extends Model
{
    use HasFactory;

    // One Health Issues belong to one student
    public function kid()
    {
        return $this->belongsTo('App\Models\Kid');
    }
}
