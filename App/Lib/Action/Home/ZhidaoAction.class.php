<?php
class ZhidaoAction extends Action {
    public function index(){
        //将萌犬医生信息发送前天
        $zhidaoOb = new ZhidaoModel();
        $zhidaoArr = $zhidaoOb->getZhidaoByList("","","","zhidaoId desc");
        $this->assign('zhidaoArr',$zhidaoArr);
        //var_dump($zhidaoArr);
        $this->display();
    }
    
    public function save(){ 
        $mOb = M("zhidao");
        $mOb->create();
        $ree = $mOb->add();
        if($ree){
            $this->success("知道添加成功!",U("Home/Zhidao/index"),3);
        }else{
            $this->success("知道添加失败!",U("Home/Zhidao/index"),3);
        }
    }
}







