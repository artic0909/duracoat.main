<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminGalleryCoatingModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'g_powder',
        'g_c_title',
    ];
}
