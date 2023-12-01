<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activites extends Model
{
    use HasFactory;

   
    public function registerrequest()
    {
        return $this->hasMany(registerrequest::class);
    }

    // Define the inverse relationship with the RegisterRequest model

}
