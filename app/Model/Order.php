<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $table = 'posts';
    public $primaryKey = 'id';
    public $timestamps = false;
    protected $dateFormat = 'U';
}
