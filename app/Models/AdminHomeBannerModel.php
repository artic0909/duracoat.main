<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminHomeBannerModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'home_banner',
        'home_banner_title',
    ];
}
