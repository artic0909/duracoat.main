<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminGalleryBendingModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'g_bending',
        'g_b_title',
    ];
}
