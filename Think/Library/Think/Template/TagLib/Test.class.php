<?php
/**
 * Created by PhpStorm.
 * User: 孟 亚 鑫
 * Date: 2017/7/18
 * Time: 17:45
 */
namespace Think\Template\TagLib;
use Think\Template\TagLib;
defined('THINK_PATH') or exit();
class Test extends TagLib{
    protected $tags =array(
        'myx' =>array('attr'=>'id,name','close'=>1),
    );
    public function _myx($tag,$content){
        $id='';
        $name='';
        if(empty($tag['id'])){
            $id='id='.'0';
        }else{
            $id='id='.$tag['id'];
        }
        if(empty($tag['name'])){
            $name='name='.'呵呵哒';
        }else{
            $name='name='.$tag['name'];
        }
        $css=$id.'<br>'.$name;
        return '<div >'.$css.'<br>'.$content.'</div>';
    }
}