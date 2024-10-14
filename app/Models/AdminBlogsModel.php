<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminBlogsModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'b_img',
        'b_title',
        'b_message',
    ];
}
