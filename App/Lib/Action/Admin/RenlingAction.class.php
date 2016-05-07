<?php
class RenlingAction extends Action {
    public function oper(){
        $renlingOb = new RenlingModel();
        //实现分页效果
        import("ORG.Util.Page");
        $count = $renlingOb->getRenlingByCount();
        $pageSize = 4;
        $page = new Page($count,$pageSize);
        $start = $page->firstRow;
        
        $renlingArr = $renlingOb->getRenlingByList("*","","$start,$pageSize");
        $showStr = $page->show();
        $this->assign("showStr",$showStr);
        $this->assign("renlingArr",$renlingArr);
        $this->display();
    }
    
    public function add(){
        $this->display();    
    }
    
    public function save(){ 
        //var_dump($_POST);
        $mOb = M("renling");
        $mOb->create();
        $ree = $mOb->add();
        if($ree){
            $this->success("认领信息添加成功!",U("Home/Renling/index"),3);
           // $this->redirect("Home/Renling/index",'',3,"认领信息添加成功!");
        }else{
            $this->success("认领信息添加失败!",U("Home/Renling/index"),3);
        }
    }
    
    public function del(){
        $renlingId = $_GET['id'];
        $renlingOb = new RenlingModel();
        $renlingOb->deleteRenlingById($renlingId);
        header("Location:{$_SERVER['HTTP_REFERER']}");
    }
    
    public function detail(){
        $renlingId = $_GET['id'];
        $renlingOb = new RenlingModel();
        $arr = $renlingOb->getRenlingById($renlingId);
        $this->assign("arr",$arr);
        $this->display();
    }
}







