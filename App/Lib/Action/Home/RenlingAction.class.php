<?php 
class RenlingAction extends Action{
    function index(){
        //将萌犬医生信息发送前天
        $fabuOb = new FabuModel();
        $fabuArr = $fabuOb->getFabuByList();
        $this->assign('fabuArr',$fabuArr);
        $this->display();
    }
    function detail(){
        if(isset($_GET['b'])){
            $b = $_GET['b'];
            $fabuOb = new FabuModel();
            $arr = $fabuOb->getFabuById($b);
            $this->assign('arr',$arr);
            //var_dump($arr);
        }
        $this->display();
    }
}