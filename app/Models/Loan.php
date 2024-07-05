<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
    // Define the relationship between the Loan and User models
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Define the relationship between the Loan and LoanStatus models
    public function loanStatus()
    {
        return $this->belongsTo(LoanStatus::class);
    }
    // Define the relationship between the Loan and Payment models
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
