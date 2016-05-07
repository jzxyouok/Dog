<?php
class BaikeAction extends Action {
    public function oper(){
        if(isset($_POST['type'])){
            $baikeOb = new BaikeModel();
            $type = $_POST['type'];
            $baikeArr = $baikeOb->getBaikeByList("*","type='{$type}'");
            //var_dump($baikeArr);
            $this->assign("baikeArr",$baikeArr);
            $this->display();
        }else{       
            $baikeOb = new BaikeModel();
            //实现分页效果
            import("ORG.Util.Page");
            $count = $baikeOb->getBaikeByCount();
            $pageSize = 4;
            $page = new Page($count,$pageSize);
            $start = $page->firstRow;
            
            $baikeArr = $baikeOb->getBaikeByList("*","","$start,$pageSize");
            $showStr = $page->show();
            $this->assign("showStr",$showStr);
            $this->assign("baikeArr",$baikeArr);
            $this->display();
        }
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
            $mOb = M("baike");
            $mOb->create();
            $ree = $mOb->add();
            if($ree){
                $this->success("百科添加成功!",U("Baike/oper"),3);
            }
        }else{
            $this->success("百科添加失败!",U("Baike/add"),3);
        }
    }
    
    public function del(){
        $baikeId = $_GET['id'];
        $baikeOb = new BaikeModel();
        $baikeOb->deleteBaikeById($baikeId);
        header("Location:{$_SERVER['HTTP_REFERER']}");
    }
    //萌犬展示
    public function detail(){
        $baikeId = $_GET['id'];
        $baikeOb = new BaikeModel();
        $arr = $baikeOb->getBaikeById($baikeId);
        $this->assign("arr",$arr);
        $this->display();
    }
    //萌犬更改
    public function update(){
        //将萌犬信息全部显示
        $baikeId = $_GET['id'];
        $baikeOb = new BaikeModel();
        $arr = $baikeOb->getBaikeById($baikeId);
        $this->assign("arr",$arr);
        $this->display();
    }
    public function usave(){
        $baikeOb = new BaikeModel();
        $baikeOb->create();
        $re = $baikeOb->save();
        if($re){
             $this->success("百科更改成功!",U("Baike/oper"),3);
        }else{
            $this->success("百科更改失败!",U("Baike/oper"),3);
        }
    }
}







