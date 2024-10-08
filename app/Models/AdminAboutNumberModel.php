<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminAboutNumberModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'clients',
        'projects',
        'staff',
        'awards',
    ];
}
