<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class servicesModel extends Model
{
    protected $primaryKey = "postID";
    protected $fillable = ['title', 'imgUrl', 'description', 'slug', 'postType'];
}
