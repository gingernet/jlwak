<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html >
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name= "Keywords" content="JYL JLY钱包 自带256G内存 汽车启动开启挖矿 汽车导航 4G-5G网络 360°全车监控报警APP系统 车载挖矿的领航者">
  <meta name="description" content="JYL 车载挖矿的领航者 自带256G内存 汽车启动开启挖矿 汽车导航 4G-5G网络 360°全车监控报警APP系统 车载挖矿的领航者">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="renderer" content="webkit">
  <meta name="viewport" content="width=1250">
  <title>JYL-JYL钱包-自带256G内存-汽车启动开启挖矿-汽车导航-4G-5G网络-360°全车监控报警APP系统-车载挖矿的领航者-jlwak.com</title>
  <link rel="stylesheet" type="text/css" href="<?php echo (CSS_HOME_URL); ?>reset.css">
  <link rel="stylesheet" type="text/css" href="<?php echo (CSS_HOME_URL); ?>index.css">
  <link rel="stylesheet" type="text/css" href="<?php echo (CSS_HOME_URL); ?>publie.css">
  <script type="text/javascript" src="<?php echo (JS_HOME_URL); ?>jquery-1.12.1.min.js"></script>
  <script type="text/javascript" src="<?php echo (JS_HOME_URL); ?>index.js"></script>
  <script type="text/javascript" src='<?php echo (PLUGIN_URL); ?>jquerypage/jquery-page.js'></script>
  <link rel="stylesheet" type="text/css" href="<?php echo (CSS_HOME_URL); ?>page.css">
  <link rel="stylesheet" type="text/css" href="<?php echo (CSS_HOME_URL); ?>product.css">
  <link rel="stylesheet" type="text/css" href="<?php echo (CSS_HOME_URL); ?>header.css">
  <link rel="stylesheet" type="text/css" href="<?php echo (CSS_HOME_URL); ?>solution.css">
  <link rel="stylesheet" type="text/css" href="<?php echo (CSS_HOME_URL); ?>product_detail.css">
</head>
<body>
  <div id="top">
    <div class="main">
      <div class="left fl">
       <span>欢迎您来到JYL挖矿中心！</span>
      </div>
      <div class="right fr">
          <a class="right_a" href="<?php echo U('User/register');?>">给我们发邮件</a>
          <i>: jlwak2020@163.com</i>
          <a href="javascript:;"></a>
        <div class="guide">
          <img src="<?php echo (IMG_HOME_URL); ?>sanjiaot.png">
        </div>
      </div>
    </div>
  </div>
   <div id="nav">
    <div class="main">
      <div class="logo fl" style="height: 90px;"><a href="<?php echo U('Index/index');?>"><img src="<?php echo (IMG_HOME_URL); ?>logo.jpg" alt=""></a></div>
      <div class="nav_left nav " style="height: 90px;" >
        <ul>
          <li><a class="hover" href="<?php echo U('Index/index');?>">首页</a></li>
          <li><a href="<?php echo u('Index/product');?>">产品服务</a></li>
          <li><a href="<?php echo u('Index/solution');?>">解决方案</a></li>
          <li><a href="<?php echo u('Index/news_list');?>">新闻资讯</a></li>
          <li><a href="<?php echo u('Index/about');?>?focus=1">关于我们</a></li>
        </ul>
      </div>
    </div>
   </div>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS_HOME_URL); ?>news.css">

<div class="son_banner">
    <img width="100%" src="<?php echo (IMG_HOME_URL); ?>banner4.jpg">
</div>
<div class="news_content">
    <div class="news-box waper">
        <div class="news-list-waper">
            <?php if(is_array($info)): foreach($info as $k=>$v): ?><div class="news-list">
                    <a href="<?php echo u('Index/news_detail', array('id'=>$v['id']));?>">
                        <div class="news-list-box clearfix h5-none">
                            <div class="time">
                                <h4 style="font-size:18px"><?php echo ($v["add_time"]); ?></h4>
                            </div>
                            <b></b>
                            <dl class="clearfix">
                                <dt>
                                    <img width="302px" height="168px" src="<?php echo (SET_URL); echo (substr($v["news_b_tx"],2)); ?>" alt="">
                                </dt>
                                <dd>
                                    <h3><?php echo ($v["title"]); ?></h3>
                                    <p><?php echo ($v["excerpt"]); ?></p>
                                </dd>
                            </dl>
                        </div>
                    </a>
                    <a href="<?php echo u('Index/news_detail', array('id'=>$v['id']));?>">
                        <span>阅读全文</span>
                        <img class="blue-img-show" width="20px" height="11px" src="<?php echo (IMG_HOME_URL); ?>arrowA-81d2f7f97d.png" alt="">
                    </a>
                </div><?php endforeach; endif; ?>
        </div>
    </div>
</div>

  <div id="footer">
    <div class="main clearfix">
      <ul>
              <li>
                <h2><span style="margin-left:32px; margin-bottom:10px; margin-top:20px">关于我们</span></h2>
                <a href="<?php echo u('Index/about');?>">服务热线</a><br/>
                <a href="<?php echo u('Index/about');?>?focus=1">项目简介</a><br/>
                <a href="<?php echo u('Index/about');?>?focus=2">技术团队</a><br/>
                <a href="<?php echo u('Index/about');?>?focus=3">发展流程</a><br/>
              </li>
              <li>
                <h2><span style="margin-left:32px; margin-bottom:10px; margin-top:20px">我们的产品</span></h2>
                <a href="#">JYL钱包</a><br/>
                <a href="#">JYL公链</a><br/>
                <a href="#">车载挖矿仪</a><br/>
                <a href="#">全车监控报警系统</a><br/>
              </li>
              <li>
                <h2><span style="margin-left:32px; margin-bottom:10px; margin-top:20px">解决方案</span></h2>
                <a href="#">公链钱包解决方案</a><br/>
                <a href="#">交易所解决方案</a><br/>
                <a href="#">车载挖矿解决方案</a><br/>
                <a href="#">全车监控解决方案</a><br/>
              </li>
              <li class="weima">
                <h2><span style="margin-left:32px; margin-bottom:10px; margin-top:20px">联系我们</span></h2>
                <a href="#">推特:jlwakcom2020</a><br/>
                <a href="#">微信:jlwakcom2020</a><br/>
                <a href="#">facebook:jlwakcom2020</a><br/>
              </li>
            </ul>
    </div>
    <div class="footer_bottom">
      <div class="foot_content">
        <p style="padding-top: 30px;">
        </p>
        <p>© 2018-2020 jlwak 车载挖矿服务中心 | All Rights Reserved&nbsp;<a target="_blank" href="#"></a>
        </p>
        <p style="padding-bottom: 50px;">
        </p>
      </div>
    </div>
  </div>
</body>
</html>