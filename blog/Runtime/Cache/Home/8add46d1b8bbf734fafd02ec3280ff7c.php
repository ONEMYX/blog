<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
                <li class=""><a href="#">发表文章</a> </li>
                <?php if($state['personal'] == 'active'): ?><li class="dropdown">
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
                <?php if($state['personal']): ?><a class="btn btn-info" href="<?php echo U('Index/out');?>">退出</a>
                    <?php else: ?>
                    <a class="btn btn-info" href="<?php echo U('Index/login');?>">登陆</a>
                    <a class="btn btn-info" href="<?php echo U('Index/regist');?>">注册</a><?php endif; ?>
            </form>

        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</nav><!-- /.navbar -->


    <style type="text/css">
      p.content {
          display: -webkit-box;
          -webkit-box-orient: vertical;
          -webkit-line-clamp: 6;
          overflow: hidden;
          min-height: 123px;
      }
    </style>
    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1 class="text-left text-muted">YX的博客</h1>
              <p class="text-danger "><strong>我是混蛋我是懦夫</strong></p>
              <p class="text-danger"><strong>我替上天管好我自己</strong></p>
              <p class="text-danger "><strong>不去祸害人间也不去祸害你</strong></p>
              <p class="text-right ">——冯唐</p>
          </div>
          <div class="row">
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arr): $mod = ($i % 2 );++$i;?><div class="col-xs-6 col-lg-4">
                <h2 class="text-success"><?php echo ($arr["title"]); ?></h2>
                <p class="text-right text-info">--<?php echo ($arr["writer"]); ?></p>
                <p class="content text-justify "><?php echo ($arr["content"]); ?></p>
                <h2><a class="btn btn-info " href="<?php echo U('Index/direction');?>?id=<?php echo ($arr["id"]); ?>" role="button">View details &raquo;</a></h2>
            </div><!--/.col-xs-6.col-lg-4--><?php endforeach; endif; else: echo "" ;endif; ?>
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
              <?php if(is_array($link)): $i = 0; $__LIST__ = $link;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Link): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Index/direction');?>?id=<?php echo ($Link["id"]); ?>"class="list-group-item "><?php echo ($Link["title"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
          </div>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->
    </div><!--/.container-->

    <script src="/blog/blog/Home/Public/JS/offcanvas.js"></script>
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