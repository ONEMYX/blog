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
                <li class=""><a href="<?php echo U('Index/text');?>">发表文章</a> </li>
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



    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-sm-8 blog-main">

          <div>
            <h2 class="blog-post-title"><?php echo ($data["title"]); ?></h2>
            <p class="blog-post-meta"><?php echo ($data["time"]); ?> <a class="btn" href="https://baike.baidu.com/item/<?php echo ($data["writer"]); ?>"><?php echo ($data["writer"]); ?></a></p>
            <p><?php echo ($data["content"]); ?></p>
          </div><!-- /.blog-post -->



          <nav>
            <ul class="pager">
              <li><a href="<?php echo U('Index/direction');?>?Previous=<?php echo ($data["id"]); ?>">Previous</a></li>
              <li><a href="<?php echo U('Index/direction');?>?Next=<?php echo ($data["id"]); ?>">Next</a></li>
            </ul>
          </nav>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->
    </div><!-- /.container -->



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