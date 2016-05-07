<?php
class FabuAction extends Action {
    public function oper(){
        if(isset($_POST['type'])){
            $fabuOb = new FabuModel();
            $type = $_POST['type'];
            $fabuArr = $fabuOb->getFabuByList("*","type='{$type}'");
            //var_dump($fabuArr);
            $this->assign("fabuArr",$fabuArr);
            $this->display();
        }else{       
            $fabuOb = new FabuModel();
            //实现分页效果
            import("ORG.Util.Page");
            $count = $fabuOb->getFabuByCount();
            $pageSize = 4;
            $page = new Page($count,$pageSize);
            $start = $page->firstRow;
            
            $fabuArr = $fabuOb->getFabuByList("*","","$start,$pageSize");
            $showStr = $page->show();
            $this->assign("showStr",$showStr);
            $this->assign("fabuArr",$fabuArr);
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
            $mOb = M("fabu");
            $mOb->create();
            $ree = $mOb->add();
            if($ree){
                $this->success("领养信息添加成功!",U("Fabu/oper"),3);
            }
        }else{
            $this->success("领养信息添加失败!",U("Fabu/add"),3);
        }
    }
    
    public function del(){
        $fabuId = $_GET['id'];
        $fabuOb = new FabuModel();
        $fabuOb->deleteFabuById($fabuId);
        header("Location:{$_SERVER['HTTP_REFERER']}");
    }
    //萌犬展示
    public function detail(){
        $fabuId = $_GET['id'];
        $fabuOb = new FabuModel();
        $arr = $fabuOb->getFabuById($fabuId);
        $this->assign("arr",$arr);
        $this->display();
    }
    //萌犬更改
    public function update(){
        //将萌犬信息全部显示
        $fabuId = $_GET['id'];
        $fabuOb = new FabuModel();
        $arr = $fabuOb->getFabuById($fabuId);
        $this->assign("arr",$arr);
        $this->display();
    }
    public function usave(){
        $fabuOb = new FabuModel();
        $fabuOb->create();
        $re = $fabuOb->save();
        if($re){
             $this->success("领养信息更改成功!",U("Fabu/oper"),3);
        }else{
            $this->success("领养信息更改失败!",U("Fabu/oper"),3);
        }
    }
}







