<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanApplication extends Model
{
    use HasFactory;
    protected $guarded = [];
    // Define the relationship between the LoanApplication and User models
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Define the relationship between the LoanApplication and LoanStatus models
    public function loanStatus()
    {
        return $this->belongsTo(LoanStatus::class);
    }
}
