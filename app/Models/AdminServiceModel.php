<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminServiceModel extends Model
{
    use HasFactory;
    protected $fillable = [
        's_icon',
        's_image',
        's_title',
        's_s_desc',
        's_l_desc',
    ];
}
