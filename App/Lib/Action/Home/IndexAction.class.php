<?php 
class IndexAction extends Action{
    public function index(){
        //将咨询信息呈现到前台界面
        $zixunOb = new ZixunModel();
        $zixunArr = $zixunOb->getZixunByList();
        //var_dump($zixunArr);
        $this->assign('zixunArr',$zixunArr);
        
        //将萌犬医生信息发送前天
        $docOb = new DocModel();
        $docArr = $docOb->getDocByList();
        $this->assign('docArr',$docArr);       
        //var_dump($docArr);
        
        $this->display();
    }
    function header(){
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
        }else if(isset($_GET['z'])){
            $z = $_GET['z'];
            $zhidaoOb = new ZhidaoModel();
            $arr = $zhidaoOb->getZhidaoById($z);
            $this->assign('arr',$arr);
            //var_dump($arr);
        }
        $this->display();
    }
}