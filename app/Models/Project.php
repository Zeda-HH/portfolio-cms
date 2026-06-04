<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'category',
        'tools',
        'image',
        'github_url',
        'demo_url',
        'file_url',

    ];
}