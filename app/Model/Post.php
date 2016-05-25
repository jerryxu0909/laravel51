<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends BaseModel
{
    use SoftDeletes;
    
    //白名单                          
    protected $fillable = [];
    /**
    * 应该被调整为日期的属性
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

}
