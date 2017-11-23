<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
//        echo '测试开始';
        $this->Home();

    }
    /**
     * Home 首页
     */
    public function Home(){
        $User=M('writings');
        $content=$User->limit(6)->order('time desc')->field('id,title,writer,content')->select();
        $link=$User->limit(10)->order('time desc')->field('id,title')->select();
        $this->assign('link',$link);
        $this->assign('data',$content);
        $this->states('Home');
        $this->display('index');
    }
    /*
     * writing 为文章视图
     */
    protected function writings($add){
        $User=M('writings');
        $a=$User->where($add)->select();
        if(isset($a)){
            $this->states('writings');
            $this->assign('data',$a[0]);
            $this->display('writing');
        }else{
            $this->index();
        }

    }
    /*
     * state 导航栏的状态
     */
    public function states($parameter){
        $state['Home']='';
        $state['writings']='';
        $state['contact']='';
        $state['personal']='';
        if ($parameter=='Home'){
            $state['Home']='active';
        }elseif ($parameter=='writings'){
            $state['writings']='active';
        }
        if(isset($_SESSION['username'])){
            $state['personal']='active';
        }else{
            $state['personal']='';
        }
        $this->assign('state',$state);
    }
    /*
     * 文章目录
     */
    public function Catalog(){
        $User=M('writings');
        $data=$User->field('id,title,writer,content')->select();
        $this->states('writings');
        $title='文章目录';
        $this->assign('title',$title);
        $this->assign('data',$data);
        $this->display('Catalog');
    }
    /*
     * 文章的中转站
     */
    public function direction (){
        $data=array();
        $data=I('get.');
        $first_key = key($data);
        if ($first_key=='Previous'){
            $add['id']=$data['Previous']-1;
            $this->writings($add);
        }elseif ($first_key=='Next'){
            $add['id']=$data['Next']+1;
            $this->writings($add);
        }elseif($first_key=='id'){
            $add['id']=$data['id'];
            $this->writings($add);
        }
    }
    /*
     * 搜索
     */
    public function search(){
        $User=M('writings');
        $text['text']=I('get.text');
        $Fiel=$User->query("desc bl_writings");
        static $i=0;
        $data = [];
        while (isset($Fiel[$i])){
            $where[$Fiel[$i]['Field']]=array('like',array('%'.$text['text'].'%',$text['text'].'%','%'.$text['text']),'OR');
            $tmp = $User->where($where)->select();
            if($tmp){
                $data= array_merge($data,$tmp);
            }
            $where=null;
            $i++;
        }
        $this->states('writings');
        $title='文章目录';
        $this->assign('title',$title);
        $this->assign('data',$data);
        $this->display('Catalog');
    }
    public function login(){
        if(isset($_POST['submit']) AND $_POST['submit']=='Log in'){
            $where['username']=I('post.username');
            $where['password']=I('post.password');
            $User=M('user');
            $data=$User->where($where)->select();
            if(!!$data){
                $_SESSION['username']=$where['username'];
//                var_dump($_SESSION);
//                var_dump($_COOKIE);
//                echo 'ok';
                $this->redirect('Index/index');
            }else{
                echo "<script language=\"javascript\"> alert(\"账号或密码错误\");window.history.back();window.location.reload();</script>";
            }
        }else{
            $this->display('login');
        }
    }
    public function out(){
        var_dump($_SESSION);
        $_SESSION=array();
        session_destroy();
        redirect('Index/index');
    }



    public function article(){
        if(empty($_SESSION['name'])){
            echo 'Please login first!';
        }else{
            var_dump($_SESSION);
            echo 1;
        }
    }
}