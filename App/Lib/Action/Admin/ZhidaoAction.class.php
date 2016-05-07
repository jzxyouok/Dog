<?php
class ZhidaoAction extends Action {
    public function oper(){
        $zhidaoOb = new ZhidaoModel();
        //实现分页效果
        import("ORG.Util.Page");
        $count = $zhidaoOb->getZhidaoByCount();
        $pageSize = 4;
        $page = new Page($count,$pageSize);
        $start = $page->firstRow;
        $zhidaoArr = $zhidaoOb->getZhidaoByList("*","","$start,$pageSize","zhidaoId desc");
        $showStr = $page->show();
        $this->assign("showStr",$showStr);
        $this->assign("zhidaoArr",$zhidaoArr);
        $this->display();
    }
    
    public function add(){
        $this->display();    
    }
    
    public function save(){ 
        $mOb = M("zhidao");
        $mOb->create();
        $ree = $mOb->add();
        if($ree){
            $this->success("知道添加成功!",U("Zhidao/oper"),3);
        }else{
            $this->success("知道添加失败!",U("Zhidao/oper"),3);
        }
    }
    
    public function del(){
        $zhidaoId = $_GET['id'];
        $zhidaoOb = new ZhidaoModel();
        $zhidaoOb->deleteZhidaoById($zhidaoId);
        header("Location:{$_SERVER['HTTP_REFERER']}");
    }
    public function detail(){
        $zhidaoId = $_GET['id'];
        $zhidaoOb = new ZhidaoModel();
        $arr = $zhidaoOb->getZhidaoById($zhidaoId);
        $this->assign("arr",$arr);
        $this->display();
    }
    public function update(){
        $zhidaoId = $_GET['id'];
        $zhidaoOb = new ZhidaoModel();
        $arr = $zhidaoOb->getZhidaoById($zhidaoId);
        $this->assign("arr",$arr);
        $this->display();
    }    
    public function usave(){
        $zhidaoOb = new ZhidaoModel();
        $zhidaoOb->create();
        $re = $zhidaoOb->save();
        if($re){
            $this->success("知道更改成功!",U("Zhidao/oper"),3);
        }else{
            $this->success("知道更改失败!",U("Zhidao/oper"),3);
        }
    }
}







