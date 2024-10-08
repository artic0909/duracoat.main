<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminClientsModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_img',
        'client_name',
    ];
}
