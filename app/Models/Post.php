<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  \TCG\Voyager\Traits\Translatable;

class Post extends Model
{
     use \TCG\Voyager\Traits\Translatable;
    protected $table = 'posts';
    protected $fillable = ['id', 'title', 'description','image','fulltext', 'created_at', 'updated_at'];
    protected  $guarded = ['id'];
    //public $timestamps = false;
}
