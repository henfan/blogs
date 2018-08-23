<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/14 0014
 * Time: 上午 8:51
 */

namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentModel extends Model
{
    use SoftDeletes;//软删除

    protected $table =  'student';//表名
    protected $primaryKey =     'id'; //主键
    protected $dateFormat = 'U';
    protected $fillable = ['name','class'];//允许批量赋值的字段
    protected $dates = ['deleted_at'];//软删除字段

    //一对一
    public function phone()
    {
        return $this->hasOne('App\Http\Model\StudentInfoModel','user_id','id');
    }

    //一对多
    public function phones()
    {
        return $this->hasMany('App\Http\Model\StudentInfoModel','user_id','id');
    }
}
