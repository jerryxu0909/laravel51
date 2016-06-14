<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Member extends BaseModel
{
//    protected $table = 'qw_member';
    public $timestamps = false;
    protected $dateFormat = 'U';
    
    protected $hidden = ['created_at', 'updated_at', 'deleted_at','email','first_name','last_name'];
    protected $appends = ['Flag_At'];
    
    public function getFlagAtAttribute(){
        return $this->attributes['Flag_At'] = "FF";
    }
      /**
     * 应该被转化为原生类型的属性
     *
     * @var array
     */
    protected $casts = [
        'options' => 'array',
    ];
    
    
    public function json(){
        //方法1，获取json
        $list = $this->orderBy('name', 'desc')->get();       
        $jsonlist = $list->toJson();
        
        //方法2，获取json
        $jsonlist = response()->json($list);
        
        //方法3，获取json
        $jsonlist = (String) $list;
        return $jsonlist;
    }

}
