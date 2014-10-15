<?php
	$login_user = $this -> session -> userdata('t_user'); 
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>小米儿个人博客</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="Keywords" content="个人博客 清新 小米儿 特色" >
<meta name="Description" content="个人博客用于个人信息简介以及感兴趣话题的讨论" >
<link rel="shortcut icon" href="<?php echo site_url('assets/front/favicon.ico');?>" >
<link href="<?php echo site_url('assets/front/css/blog.css');?>" rel="stylesheet">
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
  	<?php
		if($login_user){
	?>
       <ul>
         <li><a href="<?php echo site_url('control/blog');?>">首页</a></li>
         <li><a href="<?php echo site_url('control/index');?>">关于我</a></li>
         <li><a href="<?php echo site_url('control/c_sort');?>">日志</a></li>
         <span class="hlogin">hello,<?php echo $login_user -> user_name; ?></span>
         <li><a href="<?php echo site_url('control/index');?>">退出</a><!-- </span> --></li>
       </ul>
    <?php	
		}
		else{
	?> 
       <ul>
         <li><a href="<?php echo site_url('control/blog');?>">首页</a></li>
         <li><a href="<?php echo site_url('control/index');?>">关于我</a></li>
         <li><a href="<?php echo site_url('control/c_sort');?>">日志</a></li>
         <li><a href="<?php echo site_url('control/login');?>">登录</a></li>
         <li><a href="<?php echo site_url('control/register');?>">注册</a></li>
       </ul>
    <?php
		} 
    ?>
       <script src="<?php echo site_url('assets/front/js/silder.js');?>"></script>
  </div>
  <div class="blank"></div>
  <div class="article">
    <div class="content">
    <div class="topblog">
      <h3><p>推荐文章 New Blog</p></h3>
     <img src="<?php echo site_url('assets/front/img/01.jpg');?>" alt="" title="" width="315" height="205">
      <ul>
      	<?php foreach ($artical as $art){ ?>
           <li><a href="<?php echo site_url('control/detail/'.$art -> art_id)?>"><?php echo $art -> art_name;?><span>…………</span></a></li>
         <?php } ?>  
      </ul>
     </div> 
    <div class="bloglist">
  <!--article begin-->
  <?php foreach ($articalc as $artc){ ?>
    <ul>
    <h2><a title="<?php echo $artc -> art_name;?>" href="<?php echo site_url('control/detail/'.$artc -> art_id);?>"  target="_blank"><?php echo $artc -> art_name;?></a></h2>
    <p><?php echo $artc -> art_con;?></p>
    <figure><img src="<?php echo site_url($artc -> art_img); ?>"></figure>
    <p class="dateview">
    	<span><?php echo $artc -> art_date;?></span>
    	<span>作者:小米儿</span>
    	<span><a href="<?php echo site_url('control/index');?>" target="_blank">分类:<?php echo $artc -> art_type;?></a></span>
    	<span>评论:()</span>
    </p>
    </ul>
  <?php } ?>
    </div> 
  </div>  
  <aside class="navsidebar">
     <nav>
        <ul>
         <li class="ab"><a href="<?php echo site_url('control/index');?>" >关于我</a></li>
         <li class="sy"><a href="<?php echo site_url('control/sh_sort');?>">生活琐碎</a></li>
         <li class="js"><a href="<?php echo site_url('control/js_sort');?>">技术讨论</a></li>
         <li class="msh"><a href="<?php echo site_url('control/mc_sort');?>">萌宠世界</a></li>
         <li class="xc"><a href="<?php echo site_url('control/ms_sort');?>">美食制作</a></li>
         <!-- <li class="ly"><a href="#">照片</a></li> -->
       </ul>      
      </nav>
      <div class="slide">
      <!-- 轮播图 -->
        <script language='javascript'> 
        linkarr = new Array();
        picarr = new Array();
        textarr = new Array();
        var swf_width=276;
        var swf_height=200;

        var configtg='0xffffff|0|0x3FA61F|5|0xffffff|0xC5DDBC|0x000033|2|3|1|_blank';
        var files = "";
        var links = "";
        var texts = "";

        // linkarr[1] = "http://www.yangqq.com";
        picarr[1]  = "<?php echo site_url('assets/front/img/01.jpg');?>";
        textarr[1] = "Cute Dog 图片";
        // linkarr[2] = "http://www.yangqq.com";
        picarr[2]  = "<?php echo site_url('assets/front/img/02.jpg');?>";
        textarr[2] = " Cute Dog 图片";
        // linkarr[3] = "http://www.yangqq.com";
        picarr[3]  = "<?php echo site_url('assets/front/img/03.jpg');?>";
        textarr[3] = "Cute Dog 图片";
        // linkarr[4] = "http://www.yangqq.com";
        picarr[4]  = "<?php echo site_url('assets/front/img/04.jpg');?>";
        textarr[4] = " Cute Dog 图片";
        // linkarr[5] = "http://www.yangqq.com";
        picarr[5]  = "<?php echo site_url('assets/front/img/05.jpg');?>";
        textarr[5] = " Cute Dog 图片";
         
        for(i=1;i<picarr.length;i++){
        if(files=="") files = picarr[i];
        else files += "|"+picarr[i];
        }
        for(i=1;i<linkarr.length;i++){
        if(links=="") links = linkarr[i];
        else links += "|"+linkarr[i];
        }
        for(i=1;i<textarr.length;i++){
        if(texts=="") texts = textarr[i];
        else texts += "|"+textarr[i];
        }
        document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ swf_width +'" height="'+ swf_height +'">');
        document.write('<param name="movie" value="img/bcastr3.swf"><param name="quality" value="high">');
        document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
        document.write('<param name="FlashVars" value="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'">');
        document.write('<embed src="<?php echo site_url('assets/front/img/bcastr3.swf');?>" wmode="opaque" FlashVars="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'& menu="false" quality="high" width="'+ swf_width +'" height="'+ swf_height +'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />'); document.write('</object>'); 
        </script>
      </div>
     <h2><p>博客分类</p></h2>
      <ul class="news">
         <li><a href="<?php echo site_url('control/sh_sort');?>">生活琐碎</a></li>
         <li><a href="<?php echo site_url('control/js_sort');?>">技术讨论</a></li>
         <li><a href="<?php echo site_url('control/mc_sort');?>">萌宠世界</a></li>
         <li><a href="<?php echo site_url('control/ms_sort');?>">美食制作</a></li>
        
      </ul>
  </aside>
</div>
<div id="copright">Design by <a href="<?php echo site_url('control/index');?>" target="_blank">XiaoMiEr</a></div>
<div id="sure">© 2014 <a href="http://www.chixiaomin.com/">XiaoMier</a>黑ICP备<a href="http://www.miitbeian.gov.cn/">14005184</a>号</div>
</body>
</html>
