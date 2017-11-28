<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YX 博客</title>
    <link href="/blog/Public/bootstrap-wysiwyg-master/external/google-code-prettify/prettify.css"rel="stylesheet">
    <link href="/blog/Public/bootstrap/dist/css/bootstrap.min.css"rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" />
    <link href="/blog/blog/Home/Public/CSS/style.css"rel="stylesheet">

</head>
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
<body>
<div class="container">
    <form action="<?php echo U('Index/ex');?>" method="post" enctype="multipart/form-data" id='submitForm'>
        <h1>发表文章</h1>
        <table>
            <div class="lead">
                <tr>
                    <td>标题：</td><td> <input type="text" name="title" placeholder="标题" required="required"/></td>
                </tr>
                <tr>
                    <td> 作者：</td><td><input type="text" name="writer" placeholder="作者" required=""></td>
                </tr>
            </div>

        </table>

    <div class="btn-toolbar" data-role="editor-toolbar"
         data-target="#editor">
        <div class="btn-group">
            <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-edit="fontSize 5" class="fs-Five">Huge</a></li>
                <li><a data-edit="fontSize 3" class="fs-Three">Normal</a></li>
                <li><a data-edit="fontSize 1" class="fs-One">Small</a></li>
            </ul>
        </div>
        <div class="btn-group">
            <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" title="Text Highlight Color"><i class="fa fa-paint-brush"></i>&nbsp;<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <p>&nbsp;&nbsp;&nbsp;Text Highlight Color:</p>
                <li><a data-edit="backColor #00FFFF">Blue</a></li>
                <li><a data-edit="backColor #00FF00">Green</a></li>
                <li><a data-edit="backColor #FF7F00">Orange</a></li>
                <li><a data-edit="backColor #FF0000">Red</a></li>
                <li><a data-edit="backColor #FFFF00">Yellow</a></li>
            </ul>
        </div>
        <div class="btn-group">
            <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" title="Font Color"><i class="fa fa-font"></i>&nbsp;<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <p>&nbsp;&nbsp;&nbsp;Font Color:</p>
                <li><a data-edit="foreColor #000000">Black</a></li>
                <li><a data-edit="foreColor #0000FF">Blue</a></li>
                <li><a data-edit="foreColor #30AD23">Green</a></li>
                <li><a data-edit="foreColor #FF7F00">Orange</a></li>
                <li><a data-edit="foreColor #FF0000">Red</a></li>
                <li><a data-edit="foreColor #FFFF00">Yellow</a></li>
            </ul>
        </div>
        <div class="btn-group">
            <a class="btn btn-default" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
            <a class="btn btn-default" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
            <a class="btn btn-default" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
            <a class="btn btn-default" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
        </div>
        <div class="btn-group">
            <a class="btn btn-default" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
            <a class="btn btn-default" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
            <a class="btn btn-default" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-outdent"></i></a>
            <a class="btn btn-default" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
        </div>
        <div class="btn-group">
            <a class="btn btn-default" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
            <a class="btn btn-default" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
            <a class="btn btn-default" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
            <a class="btn btn-default" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
        </div>
        <div class="btn-group">
            <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
            <div class="dropdown-menu input-append">
                <input placeholder="URL" type="text" data-edit="createLink" />
                <button class="btn" type="button">Add</button>
            </div>
        </div>
        <div class="btn-group">
            <a class="btn btn-default" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-unlink"></i></a>
            <span class="btn btn-default" title="Insert picture (or just drag & drop)" id="pictureBtn"> <i class="fa fa-picture-o"></i>
						<input class="imgUpload" type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
					</span>
        </div>
        <div class="btn-group">
            <a class="btn btn-default" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
            <a class="btn btn-default" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
            <a class="btn btn-default" data-edit="html" title="Clear Formatting"><i class='glyphicon glyphicon-pencil'></i></a>
        </div>
    </div>
    <div id="editorPreview"></div>


        <div id="editor" class="lead" data-placeholder="请输入文章。"></div>
        <!--<a class="btn btn-large btn-default jumbo" href="#" onClick="$('#mySubmission').val($('#editor').cleanHtml(true));$('#submitForm').submit();"></a>-->
        <input type="submit"
               class="btn btn-large btn-default jumbo" onClick="$('#mySubmission').val($('#editor').cleanHtml(true));$('#submitForm').submit();"
               name="submit" value="Submit">
        <input type='hidden' name='formSubmission' id='mySubmission'/>
    </form>
</div>


<script src="/blog/Public/jquery-2.1.1.min.js"></script>
<!--键盘事件-->
<script src="/blog/Public/bootstrap-wysiwyg-master/external/jquery.hotkeys.js"></script>
<script src="/blog/Public/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/blog/Public/bootstrap-wysiwyg-master/external/google-code-prettify/prettify.js"></script>
<script src="/blog/Public/bootstrap-wysiwyg-master/bootstrap-wysiwyg.js"></script>
<script type='text/javascript'>
    $('#editor').wysiwyg(
        {
            'form':
                {
                    'text-field': 'mySubmission',
                    'seperate-binary': false
                }
        });

    $(".dropdown-menu > input").click(function (e) {
        e.stopPropagation();
    });
</script>
</body>
</html>