<?php 
class ZhidaoModel extends Model{
    function getZhidaoByList($fields="*",$where="",$limit,$order=""){
        return $this->field($fields)
        ->where($where)
        ->order($order)
        ->limit($limit)
        ->select();
    }
    
    function deleteZhidaoById($id){
        $this->where("zhidaoId = $id")->delete();
    }
    
    function getZhidaoByCount(){
        return $this->count();
    }
    function getZhidaoById($id){
        return $this->where("zhidaoId=$id")->find();
    }
}