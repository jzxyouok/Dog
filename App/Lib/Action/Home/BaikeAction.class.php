<?php 
class BaikeAction extends Action{
    public function index(){     
        //将萌犬医生信息发送前天
        $baikeOb = new BaikeModel();
        $baikeArr = $baikeOb->getBaikeByList();
        $this->assign('baikeArr',$baikeArr);       
        //var_dump($baikeArr);
        $this->display();
    }
    function detail(){
        if(isset($_GET['b'])){
            $b = $_GET['b'];
            $baikeOb = new BaikeModel();
            $arr = $baikeOb->getBaikeById($b);
            $this->assign('arr',$arr);
            //var_dump($arr);
        }
        $this->display();
    }
}