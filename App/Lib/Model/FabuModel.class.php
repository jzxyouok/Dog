<?php 
class FabuModel extends Model{
    function getFabuByList($fields="*",$where="",$limit){
        return $this->field($fields)
        ->where($where)
        ->limit($limit)
        ->select();
    }
    
    function deleteFabuById($id){
        $this->where("fabuId = $id")->delete();
    }
    
    function getFabuByCount(){
        return $this->count();
    }
    function getFabuById($id){
        return $this->where("fabuId=$id")->find();
    }
}