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
<link rel="stylesheet" href="<?php echo site_url('assets/front/css/detail.css');?>">
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
         <!-- <span class="hlogin"> --><li><a href="<?php echo site_url('control/index');?>">退出</a><!-- </span> --></li>
       </ul>
    <?php	
		}
		else{
	?> 
       <ul>
         <li><a href="<?php echo site_url('control/blog');?>">首页</a></li>
         <li><a href="<?php echo site_url('control/index');?>">关于我</a></li>
         <li><a href="<?php echo site_url('control/sort');?>">日志</a></li>
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
    <div class="index_about">
      <h2 class="c_title"> <?php echo $artical -> art_name;?> </h2>
      <p class="box_c">
        <span class="d_time">发布时间：<?php echo $artical -> art_date;?></span>
        <span>作者：小米儿</span>
        <span>阅读（）</span>
      </p>
      <p class="infos"><?php echo $artical -> art_con;?></p>
      <div class="ds_thread" id="ds_thread">
        <div class="ds_comment">
          <h3>评论</h3>
        </div>
        <?php foreach ($comment as $com){ ?>
        <ul class="ds_comments">
          <li class="ds_post">
            <div class="comment">
              <div class="comment_ifmt"> 
                <!-- <p>评论编号：<?php echo $com-> comment_id;?></p> -->
                <p>顾客昵称：<?php echo $com-> user_name;?></p>
                <p>评论时间：<?php echo $com-> comment_date;?></p>
              </div>
              <div class="com_con"><p><?php echo $com -> comment_con;?></p></div>
            </div>
          </li>
        </ul>
        <?php } ?>

	<?php
		if($login_user){
	?>
        <div class="ds_replybox">
        <h3>发表评论</h3>
          <form action="<?php echo site_url('control/comment/'.$artical -> art_id); ?>" method="post" style="margin-top:20px;">
            <input type="hidden" value="<?php echo $artical -> art_id; ?>" name="art_id" method="post"/>
            <input type="hidden" value="<?php echo $login_user -> user_id; ?>" name="user_id" method="post"/>
            <input type="hidden" value="<?php echo $login_user -> user_name; ?>" name="user_name" method="post"/>
            <input type="hidden" value="<?php echo date("Y-m-d H:i:s",time() + 8*3600); ?>" name="comment_date" method="post"/>
            <!-- <input type="text" name="comment_con" value="" id="comment_con">
            <br /> -->
            <!-- <input type="image" id="submit" value="提交"/> -->
            <div class="ds_textarea_wrapper ds_rounded_top">
              <textarea name="comment_con" id="comment_con" cols="30" rows="10" placeholder="说点什么吧"></textarea>
            </div>
            <div class="ds_post_toolbar">
              <div class="ds_post_options ds_gradient_bg">
                <span></span>
              </div>
              <button class="ds_post_button" type="submit">发布</button>
            </div>  
          </form>
        </div>
        <?php	
		}
		else{
		?> 
		<div class="ds_replybox">
        <h3>发表评论</h3>
          <form action="<?php echo site_url('control/login'); ?>" method="post" style="margin-top:20px;">
            <div class="ds_textarea_wrapper ds_rounded_top">
              <textarea name="comment_con" id="comment_con" cols="30" rows="10" placeholder="说点什么吧"></textarea>
            </div>
            <div class="ds_post_toolbar">
              <div class="ds_post_options ds_gradient_bg">
                <span></span>
              </div>
              <button class="ds_post_button" type="submit">发布</button>
            </div>  
          </form>
        </div>
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