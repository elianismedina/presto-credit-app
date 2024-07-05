<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;
    // Define the relationship between the UserProfile and User models
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
