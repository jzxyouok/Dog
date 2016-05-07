<?php
class DocAction extends Action {
    public function oper(){
        $docOb = new DocModel();
        //实现分页效果
        import("ORG.Util.Page");
        $count = $docOb->getDocByCount();
        $pageSize = 4;
        $page = new Page($count,$pageSize);
        $start = $page->firstRow;
        
        $docArr = $docOb->getDocByList("*","","$start,$pageSize");
        $showStr = $page->show();
        $this->assign("showStr",$showStr);
        $this->assign("docArr",$docArr);
        $this->display();
    }
    
    public function add(){
        $this->display();    
    }
    
    public function save(){ 
        $mOb = M("doc");
        $mOb->create();
        $ree = $mOb->add();
        if($ree){
            $this->success("问题添加成功!",U("Zhidao/oper"),3);
        }else{
            $this->success("问题添加失败!",U("Zhidao/add"),3);
        }
    }
    
    public function del(){
        $docId = $_GET['id'];
        $docOb = new DocModel();
        $docOb->deleteDocById($docId);
        header("Location:{$_SERVER['HTTP_REFERER']}");
    }
    public function detail(){
        $docId = $_GET['id'];
        $docOb = new DocModel();
        $arr = $docOb->getDocById($docId);
        $this->assign("arr",$arr);
        $this->display();
    }
    public function update(){
        $docId = $_GET['id'];
        $docOb = new DocModel();
        $arr = $docOb->getDocById($docId);
        $this->assign("arr",$arr);
        $this->display();
    }
    public function usave(){
        $docOb = new DocModel();
        $docOb->create();
        $re = $docOb->save();
        if($re){
            $this->success("医生更改成功!",U("Doc/oper"),3);
        }else{
            $this->success("医生更改失败!",U("Doc/oper"),3);
        }
    }
}







