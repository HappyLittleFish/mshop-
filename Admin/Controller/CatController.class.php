<?php
namespace Admin\Controller;
use Think\Controller;
class CatController extends Controller {
    public function cateadd(){
    	if (IS_POST) {
    	$catModel = D('Cat');
    	$catModel->add($_POST);
    	}else{
    		echo "失败";
    	}	
        $this->display();
	}
	public function catelist(){
		$catModel = D("Cat");
		$this->assign("catlist",$catModel->select());
		$this->display();
	}
		public function cateedit(){
		$catModel = D("Cat");
		$this->assign("catlist",$catModel->select());
		$this->display();
	}



}