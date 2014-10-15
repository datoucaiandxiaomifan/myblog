<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>小米儿个人博客</title>
<<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="Keywords" content="个人博客 清新 小米儿 特色" >
<meta name="Description" content="个人博客用于个人信息简介以及感兴趣话题的讨论" >
<link rel="shortcut icon" href="<?php echo site_url('assets/front/favicon.ico');?>" >
<link href="<?php echo site_url('assets/front/css/blog.css');?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo site_url('assets/front/css/login.css');?>">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>
<body>
  <header>
    <h1><a href="<?php echo site_url('control/index');?>">Welcome future</a></h1>
    <p>鲜花姹紫嫣红的背后，是我们看不到的千辛与万苦</p>
  </header>
  <div id="nav">
       <ul>
         <li><a href="<?php echo site_url('control/blog');?>">首页</a></li>
         <li><a href="<?php echo site_url('control/index');?>">关于我</a></li>
         <li><a href="<?php echo site_url('control/sort');?>">日志</a></li>
         <!-- <li><a href="moodlist.html">生活琐碎</a></li>
         <li><a href="newlist.html">技术讨论</a></li>
         <li><a href="newlist.html">爱宠</a></li>
         <li><a href="ablumlist.html">厨艺</a></li>
         <li><a href="book.html">照片</a></li> -->
         <!-- <li><a href="<?php echo site_url('control/login');?>">登录</a></li> -->
         <li><a href="<?php echo site_url('control/register');?>">注册</a></li>
       </ul>
       <script src="<?php echo site_url('assets/front/js/silder.js');?>"></script>
  </div>
  <div class="inner">
      <div class="login layout">
          <div class="l">
              <h2>用户登录</h2>
              <form name="aspnetForm" method="post" action="<?php echo site_url('control/do_login');?>" id="aspnetForm" class="form">
                  <p><label>用 户 名：</label><input name="name" type="text" id="email1" class="text" placeholder="Username or email" ><br></p>
                  <p><label> 密&nbsp&nbsp&nbsp&nbsp码：</label><input name="pwd" type="password" id="pwd1" class="text" placeholder="Password" ><br></p>
                  <p><label></label><input type="submit" name="Button" value="" id="Button1" class="lregist"></p>
              </form>
          </div>
          <div class="r">
              <div class="rcon">
                    还不是本网用户？<br><br>
                  <a class="fastregist" href="<?php echo site_url('controlweb/register'); ?>"></a>
                  <br>
                  <br>
              </div>
          </div>
      </div>
  </div>
<div id="copright">Design by <a href="control/blog" target="_blank">DanceSmile</a></div>
<div id="sure">© 2014 <a href="http://www.chixiaomin.com/">XiaoMier</a>黑ICP备<a href="http://www.miitbeian.gov.cn/">14005184</a>号</div>
</body>
</html>