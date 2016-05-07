<?php 
class ZixunModel extends Model{
    function getZixunByList($fields="*",$where="",$limit){
        return $this->field($fields)
        ->where($where)
        ->limit($limit)
        ->select();
    }
    
    function deleteZixunById($id){
        $this->where("zixunId = $id")->delete();
    }
    
    function getZixunByCount(){
        return $this->count();
    }
    function getZixunById($id){
        return $this->where("zixunId=$id")->find();
    }
}