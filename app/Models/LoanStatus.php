<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanStatus extends Model
{
    use HasFactory;
    // Define the relationship between the LoanStatus and Loan models
    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
    // Define the relationship between the LoanStatus and LoanApplication models
    public function loanApplications()
    {
        return $this->hasMany(LoanApplication::class);
    }
}
