<?php
// 本类由系统自动生成，仅供测试用途
class UserAction extends Action {
    public function page1(){
        $obj =  M("user");
        $list = $obj->order("t0.tm desc")->field("t0.*,CONCAT(tt.url,'?iskey=',tt.parameter) as url,tt.AName,tt.form")->alias("t0")->join(
            array("left join (select t0.*,CONCAT(l.AName,'>',t0.name) as AName,l.form,p.url 
            from keyword t0 left join 
            (select t0.*,if(t0.pId=0,t0.name,
                (select if(t1.pId=0,CONCAT(t1.name,'>',t0.name),
                    (select if(t2.pId=0,CONCAT(t2.name,'>',t1.name,'>',t0.name),0) as AName from list t2 where t2.id=t1.pId)) as AName 
                        from list t1 where t0.pId=t1.id)) as AName from list t0) l on l.id=t0.lId left join page p on p.id=l.pageId) tt on tt.id=t0.kId"))
                            ->select();
        $this->assign("list",$list);
        // var_dump($list);exit;
        $this->display("user");
    }
    public function page2(){
        $obj = M("list");
        $page = M("page");
        $keyword = M("keyword");
        $where = 'pageId=0';
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
                $where = "form=".$fId." and pageId=".$pId;
            }
        }
        $list = $obj->where($where)->select();
        $kist = $keyword->field("t0.*,p.url")->alias("t0")->join(array("left join list l on l.id=t0.lId","left join page p on p.id=l.pageId"))->select();
        $pist = $page->select();
        // var_dump($list);
        // var_dump($kist);
        // var_dump($pist);
        // exit;
        $this->assign("pageInfo",$pageInfo);
        $this->assign("form",$form);
        $this->assign("list",$list);
        $this->assign("kist",$kist);
        $this->assign("pist",$pist);
		$this->display("link");
    }
    public function editPage2(){
        $list = M("list");
        $keyword = M("keyword");
        if($_GET){
            $id = $this->_get("id");
            $type = $this->_get("type");
            $data = array();
            $data['name'] = trim($this->_get("name"));
            if($data['name']==""){
                printf(json_encode(1));exit;
            }
            if($type=="addList"){
                $data['pId'] = $id;
                $data['pageId'] = trim($this->_get("pageId"));
                $data['form'] = trim($this->_get("form"));
                $data['name'] = trim($this->_get("name"));
                $data['tm'] = date("Y-m-d H:i:s");
                $rs = $list->add($data);
            }
            if($type=="editList"){
                $rs = $list->where("id={$id}")->save($data);
            }
            if($type=="addUrl"){
                $data['lId'] = $id;
                $data['tm'] = date("Y-m-d H:i:s");
                $data['parameter'] = rand(100000,999999).time().rand(100,999);
                $rs = $keyword->add($data);
            }
            if($type=="editUrl"){
                $rs = $keyword->where("id={$id}")->save($data);
            }
            if($rs===false){
                printf(json_encode(2));exit;
            }else{
                printf(json_encode(0));exit;
            }
        }
    }
    public function delPage2(){
        $list = M("list");
        $keyword = M("keyword");
        if($_GET){
            $id = $this->_get("id");
            $type = $this->_get("type");
            if($type=="file"){
                $rs = $keyword->where("id={$id}")->delete();
            }
            if($type=="folder"){
                $listIn = "({$id},";
                $subList1 = $list->where("pId={$id}")->select();
                if(!empty($subList1)){
                    foreach($subList1 as $row1){
                        $subList2 = $list->where("pId={$row1['id']}")->select();
                        $listIn .= "{$row1['id']},";
                        if(!empty($subList2)){
                            foreach($subList2 as $row2){
                                $listIn .="{$row2['id']},";      
                            }
                        }
                    }
                }
                $listIn = trim($listIn,",").")";
                $rs = $list->where("id in {$listIn}")->delete();
                $keyword->where("lId in {$listIn}")->delete();
            }
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
        $page = M("page");
        $list = M("list");
        $key = M("keyword");
        if($_GET){
            $keyIn = "(";
            $id = $this->_get("id");
            $rs = $page->where("id={$id}")->delete();
            $listArr = $list->where("pageId={$id}")->select();
            if($listArr){
                foreach($listArr as $row){
                    $keyIn .= "{$row['id']},";
                }
            }
            $keyIn = trim($keyIn,",").")";
            $key->where("lId in {$keyIn}")->delete();
            $list->where("pageId={$id}")->delete();
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