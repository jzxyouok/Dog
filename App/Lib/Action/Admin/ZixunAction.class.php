<?php
class ZixunAction extends Action {
    public function oper(){
        $zixunOb = new ZixunModel();
        //实现分页效果
        import("ORG.Util.Page");
        $count = $zixunOb->getZixunByCount();
        $pageSize = 4;
        $page = new Page($count,$pageSize);
        $start = $page->firstRow;
        
        $zixunArr = $zixunOb->getZixunByList("*","","$start,$pageSize");
        $showStr = $page->show();
        $this->assign("showStr",$showStr);
        $this->assign("zixunArr",$zixunArr);
        $this->display();
    }
    
    public function add(){
        $this->display();    
    }
    
    public function save(){ 
        //上传图片
        import("ORG.Net.UploadFile");
        $upload = new UploadFile();
        $upload->maxSize = 200000;
        $upload->allowType=array("image/jpeg","image/gif","image/png","image/pjpeg");
        $upload->savePath="./Public/upload/";
        $re=$upload->upload();
        //判断是否上传成功
        if($re){
            $imgArr = $upload->getUploadFileInfo();
            $_POST['image'] = $imgArr[0]["savename"];
            $mOb = M("zixun");
            $mOb->create();
            $ree = $mOb->add();
            if($ree){
                $this->success("咨询添加成功!",U("Zixun/oper"),3);
            }
        }else{
            $this->redirect("Zixun/add",'',3,"图片上传失败!");
        }
    }
    
    public function del(){
        $zixunId = $_GET['id'];
        $zixunOb = new ZixunModel();
        $zixunOb->deleteZixunById($zixunId);
        header("Location:{$_SERVER['HTTP_REFERER']}");
    }
    
    public function detail(){
        $zixunId = $_GET['id'];
        $zixunOb = new ZixunModel();
        $arr = $zixunOb->getZixunById($zixunId);
        $this->assign("arr",$arr);
        $this->display();
    }
    public function update(){
        $zixunId = $_GET['id'];
        $zixunOb = new ZixunModel();
        $arr = $zixunOb->getZixunById($zixunId);
        $this->assign("arr",$arr);
        $this->display();
    }
    public function usave(){
        $zixunOb = new ZixunModel();
        $zixunOb->create();
        $re = $zixunOb->save();
        if($re){
            $this->success("咨询更改成功!",U("Zixun/oper"),3);
        }else{
            $this->success("咨询更改失败!",U("Zixun/oper"),3);
        }
    }
}







