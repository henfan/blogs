<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/14 0014
 * Time: 上午 8:17
 */

namespace App\Http\Controllers\Test;
use App\Http\Controllers\Controller;
use App\Http\Model\StudentModel;

class TestController extends Controller
{
    //测试首页
    public function index()
    {
        return 'this Test- - -index';
    }

    public function insert()
    {
        $data = request()->all();
        if(!empty($data)){
//        return StudentModel::insertGetId($data);//新增一条数据，并返回该记录主键,不会自动写入时间戳
        StudentModel::create($data);//新增数据，可批量

        }
    }

    public function detail($id)
    {
        $data =  StudentModel::find($id);
        dump( $data->toArray(),$data->hone->toArray());
    }

    public function update($id,$name)
    {
        $data = StudentModel::find($id) ;
        $data->name = $name;
        $data->save();

    }

    public function delete($id)
    {
        $data = StudentModel::find($id) ;
        $data->delete();
    }
}
