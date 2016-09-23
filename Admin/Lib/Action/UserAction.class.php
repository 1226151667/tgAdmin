<?php
// 本类由系统自动生成，仅供测试用途
class UserAction extends Action {
    public function checkLogin(){
        if(!isset($_SESSION['uname'])){
            $this->redirect("Enter/open1");
        }
    }
    public function page1(){
        $this->checkLogin();

    	$obj = 	M("user");
    	$list = $obj->field("t0.*,l.keyword as lKeyword,l.form,l.parameter,p.name as pageName,p.url")->
            alias("t0")->join(array("left join link l on l.id=t0.lId","left join page p on p.id=l.pId"))->select();
    	$this->assign("list",$list);
		$this->display("user");
    }
    public function page2(){
        $this->checkLogin();

        $obj = M("link");
        $page = M("page");
        $where = 'pId=0';
        $formArr = array("推广平台","百度","360","搜狗","新浪扶翼","百度网盟","粉丝通","神马","陌陌");
        $form = array();
        $pageInfo = array();
        $form['id'] = 0;
        $form['name'] = $formArr[0];
        $pageInfo['id'] = 0;
        $pageInfo['name'] = '活动页面';
        if($_GET){
            $fId = $this->_get("fId");
            $pId = $this->_get("pId");
            if($pId){
                $pageInfo = $page->field("name,id")->where("id={$pId}")->find();
            }
            if($fId){
                $form['id'] = $fId;
                $form['name'] = $formArr[$fId];
            }
            if($pId && $fId){
                $where = "form=".$fId." and pId=".$pId;
            }
        }
        $lList = $obj->where($where)->order("t0.tm desc")->field("t0.*,p.name as pageName,p.url")->alias("t0")->join("page p on p.id=t0.pId")->select();
        $pList = $page->select();
        $this->assign("pageInfo",$pageInfo);
        $this->assign("form",$form);
        $this->assign("lList",$lList);
        $this->assign("pList",$pList);
		$this->display("link");
    }
    public function editPage2(){
        $obj = M("link");
        $page = M("page");
        // $S = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
        if($_GET){
            $id = $this->_get("id");
            $data = array();
            $data['form'] = (int)$_GET['form'];
            $data['pId'] = (int)$_GET["pId"];
            $data['keyword'] = trim($this->_get("keyword"));
            $data['tm'] = date("Y-m-d H:i:s");
            $data['parameter'] = rand(100000,999999).time().rand(100000,999999);
            if($data['form']==0 || $data['pId']==0){
                printf(json_encode(4));
                exit;
            }
            $pf = $page->where("id={$data['pId']}")->find();
            // var_dump($pf);exit;
            if($pf==null){
                printf(json_encode(5));
                exit;
            }
            if($data['form']>8 || $data['form']<1){
                printf(json_encode(6));
                exit;
            }
            if($data['keyword']==''){
                printf(json_encode(1));
                exit;
            }
            $row = $obj->where("keyword='{$data['keyword']}'")->find();
            if($id==0){
                if($row){
                    printf(json_encode(2));
                    exit;
                }else{
                    $rs = $obj->add($data);
                }
            }else{
                if($row && $row['id']!=$id){
                    printf(json_encode(2));
                    exit;
                }else{
                    $rs = $obj->where("id={$id}")->save($data);
                }
            }
            if($rs===false){
                printf(json_encode(3));
                exit;
            }else{
                printf(json_encode(0));
                exit;
            }
        }
    }
    public function delPage2(){
        $obj = M("link");
        if($_GET){
            $id = $this->_get("id");
            $rs = $obj->where("id={$id}")->delete();
            if($rs){
                printf(json_encode(0));
                exit;
            }else{
                printf(json_encode(1));
                exit;
            }
        }
    }
    public function page3(){
        $this->checkLogin();
        
        $obj = M("page");
        $list = $obj->select();
        $this->assign("list",$list);
		$this->display("page");
    }
    public function editPage3(){
        $obj = M("page");
        if($_GET){
            $id = $this->_get("id");
            $data = array();
            $data['name'] = trim($this->_get("name"));
            $data['url'] = trim($this->_get("url"));
            $data['tm'] = date("Y-m-d H:i:s");
            if(in_array("",$data)){
                printf(json_encode(1));
                exit;
            }
            $row = $obj->where("name='{$data['name']}' or url='{$url}'")->find();
            if($id==0){
                if($row){
                    printf(json_encode(2));
                    exit;
                }else{
                    $rs = $obj->add($data);
                }
            }else{
                if($row && $row['id']!=$id){
                    printf(json_encode(2));
                    exit;
                }else{
                    $rs = $obj->where("id={$id}")->save($data);
                }
            }
            if($rs===false){
                printf(json_encode(3));
                exit;
            }else{
                printf(json_encode(0));
                exit;
            }
        }
    }
    public function delPage3(){
        $obj = M("page");
        $user = M("user");
        $link = M("link");
        if($_GET){
            $id = $this->_get("id");
            $rs = $obj->where("id={$id}")->delete();
            $rs1 = $link->where("pId={$id}")->delete();
            if($rs){
                printf(json_encode(0));
                exit;
            }else{
                printf(json_encode(1));
                exit;
            }
        }
    }
}