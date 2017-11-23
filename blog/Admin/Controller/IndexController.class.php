<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo "测试开始";
    }

    public function Admin(){
        $this->display();
    }
}