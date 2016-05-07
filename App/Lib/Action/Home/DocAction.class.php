<?php 
class DocAction extends Action{
    public function index(){     
        //将萌犬医生信息发送前天
        $docOb = new DocModel();
        $docArr = $docOb->getDocByList();
        $this->assign('docArr',$docArr);       
        //var_dump($docArr);
        $this->display();
    }
    function detail(){
        if(isset($_GET['zx'])){
            $zx = $_GET['zx'];
            $zixunOb = new ZixunModel();
            $arr = $zixunOb->getZixunById($zx);
            $this->assign('arr',$arr);
            //var_dump($arr);
        }else if(isset($_GET['d'])){
            $d = $_GET['d'];
            $docOb = new DocModel();
            $arr = $docOb->getDocById($d);
            $this->assign('arr',$arr);
            //var_dump($arr);
        }
        $this->display();
    }
}