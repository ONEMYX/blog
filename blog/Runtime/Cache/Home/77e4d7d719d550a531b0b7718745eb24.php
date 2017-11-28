<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Paper Stack</title>
    <link rel="stylesheet" type="text/css" href="/blog/blog/Home/Public/CSS/register.css" />
</head>
<body>
<div class="container">
    <section id="content">
        <form method="post" action="<?php echo U('User/register');?>" >
            <h1>Register Form</h1>
            <div>
                <input type="text" placeholder="Username" required="" id="username"name="user" />
            </div>
            <div>
                <input type="password" placeholder="Password" required="" id="password" name="password"/>
            </div>
            <div>
                <input type="password" placeholder="NotPassword" required="" id="notpassword" name="notpassword"/>
            </div>
            <div>
                <input type="email" placeholder="Email" required="" id="email" name="email"/>
            </div>
            <div>
                <input type="submit" name="submit" value="Regist in" />
            </div>
        </form><!-- form -->
        <div class="button">
            <a href="#">Download source file</a>
        </div><!-- button -->
    </section><!-- content -->
</div><!-- container -->
</body>
</html>