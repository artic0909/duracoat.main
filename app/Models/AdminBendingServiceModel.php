<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminBendingServiceModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'sb_icon',
        'sb_image',
        'sb_title',
        'sb_s_desc',
        'sb_l_desc',
    ];
}
