<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];
    // OR protected $guarded = ['id'];
    // OR  protected $fillable =['title', 'excerpt', 'body', 'id'];
}
