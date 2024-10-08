<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminCollabCompanyModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'collab_company',
        'collab_company_name',
    ];
}
