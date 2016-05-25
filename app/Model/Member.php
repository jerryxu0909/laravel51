<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Member extends BaseModel
{
    protected $table = 'qw_member';
    public $timestamps = false;
    protected $dateFormat = 'U';
}
