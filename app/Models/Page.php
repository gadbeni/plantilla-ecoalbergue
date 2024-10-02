<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Page extends Model
{
    use HasFactory, Resizable;

    protected $fillable = [
        'title',
        'excerpt',
    ];
}
