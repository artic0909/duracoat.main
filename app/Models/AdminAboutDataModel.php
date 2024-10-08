<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminAboutDataModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'about_image',
        'about_title',
        'about_desc',
        'about_ex',
    ];
}
