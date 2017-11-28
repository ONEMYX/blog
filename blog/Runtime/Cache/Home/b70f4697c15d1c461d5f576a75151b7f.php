<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>YX 博客</title>
    <!-- Bootstrap core CSS -->
    <link href="/blog/Public/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/blog/Public/bootstrap/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/blog/blog/Home/Public/CSS/offcanvas.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="APP_BOOT/docs/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/blog/Public/bootstrap/docs/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo U('Index/Home');?>">YX</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="<?php echo ($state['Home']); ?>"><a href="<?php echo U('Index/Home');?>">首页</a></li>
                <li class="<?php echo ($state['writings']); ?>"><a href="<?php echo U('Index/Catalog');?>">文章</a></li>
                <li class="<?php echo ($state['contact']); ?>"><a href="#contact">推荐</a></li>
                <?php if($state['personal'] == 'active'): ?><li class=""><a href="<?php echo U('Index/text');?>">发表文章</a> </li>
                    <li class="dropdown">
                        <a href="#personal"data-toggle="dropdown" class="dropdown-toggle">个人中心<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="##">CSS3</a></li>
                            <li><a href="##">JavaScript</a></li>
                            <li class="disabled"><a href="##">PHP</a></li>
                        </ul>
                    </li><?php endif; ?>
            </ul>
            <form action="<?php echo U('Index/search');?>" class="navbar-form navbar-right" rol="search">
                <div class="form-group">
                    <input type="text" name="text" class="form-control" placeholder="请输入关键词" />
                </div>
                <button type="submit"  class="btn btn-default">搜索</button>
                <?php if($state['personal']): ?><a class="btn btn-info" href="<?php echo U('User/out');?>">退出</a>
                    <?php else: ?>
                    <a class="btn btn-info" href="<?php echo U('User/login');?>">登陆</a>
                    <a class="btn btn-info" href="<?php echo U('User/register');?>">注册</a><?php endif; ?>
            </form>

        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</nav><!-- /.navbar -->

    <div class="container">

      <div class="page-header">
        <h1><?php echo ($title); ?></h1>
        <p class="lead text-warning">其实并不是正义能战胜邪恶，而是历史只有正义的一方才能书写。这世间，胜的一方才永远是正义。</p>
      </div>
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arr): $mod = ($i % 2 );++$i;?><h3><?php echo ($arr["title"]); ?><small class="">--《<?php echo ($arr["writer"]); ?>》</small></h3>
            <p><?php echo ($arr["content"]); ?></p>
            <p class="text-right"><a class="btn right" href="<?php echo U('Index/direction');?>?id=<?php echo ($arr["id"]); ?>" role="button">阅读&raquo;</a> </p><?php endforeach; endif; else: echo "" ;endif; ?>
    </div> <!-- /container -->


<div class="container">
    <hr>

    <footer>
        <p>&copy; 联系：744761572@qq.com</p>
    </footer>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/blog/Public/jquery-2.1.1.min.js"></script>
<script>window.jQuery || document.write('<script src="APP_BOOT/docs/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="/blog/Public/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/blog/Public/bootstrap/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>