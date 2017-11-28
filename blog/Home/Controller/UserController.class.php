<?php
/**
 * Created by PhpStorm.
 * User: 孟亚鑫
 * Date: 2017/11/26
 * Time: 13:42
 */
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller {
    protected function index(){
        echo 1;
    }
    /*
     * 用户注册
     */
    public function register(){
        if (isset($_POST['submit'])AND$_POST['submit']=='Regist in'){
            var_dump($_POST);
            $where['username']=I('post.user');
            $where['password']=I('post.password');
            $notpassword=I('post.notpassword');
            if ($where['password']==$notpassword){
                $user=M('user');
                $data=$user->where('username='.$where['username'])->select();
                if(isset($data)){
                    echo"<script>alert('用户名已被注册！');history.go(-1);</script>";
                }else{
                    $register=$user->add($where);
                    if (!!$register){
                       $this->success('注册成功！','login');
                    }else{
                        echo"<script>alert('注册失败');history.go(-1);</script>";
                    }
                }
            }else{
                echo"<script>alert('密码和确认密码不同！');history.go(-1);</script>";
            }
        }
        $this->display('User/register');
    }
    /*
     * 用户登陆
     */
    public function login(){
        if(isset($_POST['submit']) AND $_POST['submit']=='Log in'){
            $where['username']=I('post.username');
            $where['password']=I('post.password');
            $User=M('user');
            $data=$User->where($where)->select();
            if(!!$data){
                $_SESSION['username']=$where['username'];
                $this->redirect('Index/index');
            }else{
                echo "<script language=\"javascript\"> alert(\"账号或密码错误\");window.history.back();window.location.reload();</script>";
            }
        }else{
            $this->display('login');
        }
    }
    /*
     * 用户退出
     */
    public function out(){
        $_SESSION=array();
        session_destroy();
        $this->redirect('Index/index');
    }
    public function messages(){
//        var_dump($_POST);
        $data['content']=str_replace("\n","<br />",$_POST['message']);
        $data['content']= htmlspecialchars($data['content'] , ENT_QUOTES);
        $data['user']=I('post.user');
        $data['writer_id']=I('post.write');
        $data['new_id']='0';
        $data['time']=date("Y-m-d H:i:s");
//        var_dump($data);
        $user=M('messages');
        $A=$user->add($data);
        if($A){
            $this->success('留言成功');
        }else{
            $this->error('留言失败');
        }
//        $a['a']=print_r($_POST['message']);
//        echo '<br>';
//        var_dump($a);
//        print_r($data);
    }



}