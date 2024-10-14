<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminTeamsModel extends Model
{
    use HasFactory;
    protected $fillable = [
        't_img',
        't_name',
        't_prof',
        't_insta',
        't_fb',
        't_twit',
    ];
}
