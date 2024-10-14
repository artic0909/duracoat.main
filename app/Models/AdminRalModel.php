<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminRalModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'ral',
    ];
}
