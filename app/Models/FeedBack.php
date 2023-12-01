<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedBack extends Model
{
    // In your FeedBack model
protected $fillable = ['user_id', 'rating', 'comments'];

    use HasFactory;
}
