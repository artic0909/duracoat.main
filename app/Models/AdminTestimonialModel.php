<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminTestimonialModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'tst_img',
        'tst_name',
        'tst_prof',
        'tst_msg',
    ];
}
