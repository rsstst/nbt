<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    protected $primaryKey = "post_id";
    protected $fillable = ['title', 'imgUrl', 'description', 'slug'];
}
