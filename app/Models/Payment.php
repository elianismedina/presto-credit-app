<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    // Define the relationship between the Payment and Loan models

    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }
}
