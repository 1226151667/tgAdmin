<?php
class EnterAction extends Action{
	public function open1(){
		$obj = M("empuser");
		if($_POST){
			$uname = trim($this->_post("uname"));
			$pwd = trim($this->_post("pwd"));
			if($uname=='' || $pwd==''){
				$this->error("输入不能有空",U("Enter/open1"));
			}
			$info = $obj->where("uname='{$uname}'")->find();
			if($info){
				if($info['pwd']==md5($pwd)){
					$this->success("登录成功",U("User/page1"));
					$_SESSION['uname'] = $uname;
					exit;
				}else{
					$this->error("密码错误",U("Enter/open1"));
				}
			}else{
				$this->error("用户名不存在",U("Enter/open1"));
			}
		}
		$this->display("login");
	}
	public function open2(){
		if(isset($_SESSION['uname'])){
			unset($_SESSION['uname']);
			$this->redirect("Enter/open1");
		}
	}
}
?>