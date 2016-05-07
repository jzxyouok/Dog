<?php 
class RenlingModel extends Model{
    function getRenlingByList($fields="*",$where="",$limit,$order=""){
        return $this->field($fields)
        ->where($where)
        ->order($order)
        ->limit($limit)
        ->select();
    }
    
    function deleteRenlingById($id){
        $this->where("renlingId = $id")->delete();
    }
    
    function getRenlingByCount(){
        return $this->count();
    }
    function getRenlingById($id){
        return $this->where("renlingId=$id")->find();
    }
}