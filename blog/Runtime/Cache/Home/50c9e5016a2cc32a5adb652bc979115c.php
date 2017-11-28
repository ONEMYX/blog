<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Paper Stack</title>
    <link rel="stylesheet" type="text/css" href="/blog/blog/Home/Public/CSS/login.css" />
</head>
<body>
<div class="container">
    <section id="content">
        <form method="post" action="<?php echo U('User/login');?>">
            <h1>Login Form</h1>
            <div>
                <input type="text"name="username" placeholder="Username" required="" id="username" />
            </div>
            <div>
                <input type="password"name="password" placeholder="Password" required="" id="password" />
            </div>
            <div>
                <input type="submit" name="submit" value="Log in" />
                <a href="#">Lost your password?</a>
                <a href="#">Register</a>
            </div>
        </form><!-- form -->
        <div class="button">
            <a href="#">Download source file</a>
        </div><!-- button -->
    </section><!-- content -->
</div><!-- container -->
</body>
</html>