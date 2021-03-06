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
        $field=array('id','title','writer','content');
        $content=$this->filter($content,$field);//转义
        $link=$User->limit(10)->order('time desc')->field('id,title')->select();
        $this->assign('link',$link);
        $this->assign('data',$content);
        $this->states('Home');
        $this->display('index');
    }
    public function filter($data,$Fiel){
        $i=0;
        while (isset($data[$i])){
            $y=0;
            while (isset($Fiel[$y])){
                $data[$i][$Fiel[$y]]=htmlspecialchars_decode($data[$i][$Fiel[$y]]);
                $y++;
            }
            $i++;
        }
        return $data;
    }
    /*
     * writing 为文章视图
     */
    protected function writings($add){
        $User=M('writings');
        $a=$User->where($add)->select();
        if(isset($a)){
            $field=array('id','title','writer','time','content');
            $a=$this->filter($a,$field);
            $this->states('writings');
            if(!empty($_SESSION['username'])){
                $this->assign('user',$_SESSION['username']);
            }else{
                $this->assign('user',null);
            }
//            var_dump($add);
            $this->check_messges($add);
            $this->assign('data',$a[0]);
            $this->display('writing');
        }else{
            $this->index();
        }
    }
    protected function check_messges($where){
        $user=M('messages');
        $check=array();
        $check['writer_id']=$where['id'];
//        var_dump($check);
        $message=$user->where($check)->select();
//        var_dump($message);
        if (isset($message)) {
           $i=0;
           while(!empty($message[$i])){
               $message[$i]['content']=htmlspecialchars_decode($message[$i]['content']);
               $message[$i]['lou']=$i+1;
               $i++;
           }
        }else{
            $message = "null";
        }
        $this->assign('messges',$message);
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
        $i=0;
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


    /**
     * 文章发表
     */
    public function text(){
        if(IS_POST ){
            if(!empty($_POST['formSubmission'])){
                $this->text1();
                $add['title']=I('post.title');
                $add['writer']=I('post.writer');
                $add['time']=date("Y-m-d H:i:s");
                $add['content']=I('post.formSubmission');
                $User=M('writings');
                $data=$User->data($add)->add();
                if($data){
                    redirect('Index/index');
                }
            }else{
                echo "<script language=\"javascript\"> alert(\"文章不能为空\");window.history.back();window.location.reload();</script>";
            }
        }else{
            $this->display('text');
        }
    }
    public function ex(){
//        $user=M('writings');
//        $data=$user->where('id=6')->select();
//        var_dump($data);
//        $a['content']=str_replace('。','。</br>',$data[0]['content']);
//        var_dump($a);
//        $a['content']=htmlspecialchars($a['content']);
//        var_dump($a);
    }
    public function text1(){
        $_POST['formSubmission']=str_replace('<div>','',$_POST['formSubmission']);
        $_POST['formSubmission']=str_replace('</div>','</br>',$_POST['formSubmission']);
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