<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminCompanyDetailsModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'c_number',
        'c_email',
    ];
}
