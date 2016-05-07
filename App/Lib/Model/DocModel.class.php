<?php 
class DocModel extends Model{
    function getDocByList($fields="*",$where="",$limit){
        return $this->field($fields)
        ->where($where)
        ->limit($limit)
        ->select();
    }
    
    function deleteDocById($id){
        $this->where("docId = $id")->delete();
    }
    
    function getDocByCount(){
        return $this->count();
    }
    function getDocById($id){
        return $this->where("docId=$id")->find();
    }
}