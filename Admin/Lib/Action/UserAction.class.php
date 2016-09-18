<?php
// 本类由系统自动生成，仅供测试用途
class UserAction extends Action {
    public function page1(){
    	$obj = 	M("user");
    	$list = $obj->field("t0.*,l.keyword as lKeyword,l.form,l.parameter,p.name as pageName,p.url")->
            alias("t0")->join(array("left join link l on l.id=t0.lId","left join page p on p.id=l.pId"))->select();
    	$this->assign("list",$list);
		$this->display("user");
    }
    public function page2(){
		$this->display("link");
    }
    public function page3(){
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
            $row = $obj->where("name='{$name}' or url='{$url}'")->find();
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
            if($rs && $rs1){
                printf(json_encode(0));
                exit;
            }else{
                printf(json_encode(1));
                exit;
            }
        }
    }
}