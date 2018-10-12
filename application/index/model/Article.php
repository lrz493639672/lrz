<?php
namespace app\index\model;
use think\Model;
use think\Db;
class Article extends Model{
    public function add($data){
        return Db::table('article')->insert($data);
    }
    public function show(){
        return Db::table('article')->select();
    }
    public function del($id){
        return Db::table('article')->where("id",$id)->delete();
    }
    public function upd($id){
        return Db::table('article')->where("id",$id)->find();
    }
    public function doupd($id,$content){{
        return Db::table('article')->where("id",$id)->update($content);
    }}
}