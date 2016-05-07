<?php 
class BaikeModel extends Model{
    function getBaikeByList($fields="*",$where="",$limit){
        return $this->field($fields)
        ->where($where)
        ->limit($limit)
        ->select();
    }
    
    function deleteBaikeById($id){
        $this->where("baikeId = $id")->delete();
    }
    
    function getBaikeByCount(){
        return $this->count();
    }
    function getBaikeById($id){
        return $this->where("baikeId=$id")->find();
    }
}