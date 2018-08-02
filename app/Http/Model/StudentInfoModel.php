<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/16 0016
 * Time: 上午 10:08
 */

namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;

class StudentInfoModel extends Model
{
    protected $table =  'studentinfo';//表名
    protected $primaryKey =     'id'; //主键


    //一对一关联
    public function user()
    {
        return $this->belongsTo('App\Http\Model\StudentModel','id','user_id');
    }
    //测试
}