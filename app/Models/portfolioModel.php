<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class portfolioModel extends Model
{
    protected $primaryKey = "postID";
    protected $fillable = ['title', 'imgUrl', 'description', 'slug', 'postType'];
}
