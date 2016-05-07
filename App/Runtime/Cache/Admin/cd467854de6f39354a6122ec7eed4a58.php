<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>用户中心</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/main.css"/>
    <script type="text/javascript" src="__PUBLIC__/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="__APP__/Zixun/oper" target="main"><i class="icon-font">&#xe005;</i>萌犬资讯</a></li>
                        <li><a href="__APP__/Zixun/add" target="main"><i class="icon-font">&#xe006;</i>添加咨询</a></li>
                        <li><a href="__APP__/Baike/oper" target="main"><i class="icon-font">&#xe005;</i>萌犬百科</a></li>
                        <li><a href="__APP__/Baike/add" target="main"><i class="icon-font">&#xe006;</i>添加百科</a></li>
                        <li><a href="__APP__/Doc/oper" target="main"><i class="icon-font">&#xe005;</i>萌犬医生</a></li>
                        <li><a href="__APP__/Doc/add" target="main"><i class="icon-font">&#xe006;</i>添加问题</a></li>
                        <li><a href="__APP__/Zhidao/oper" target="main"><i class="icon-font">&#xe005;</i>知道管理</a></li>
                        <li><a href="__APP__/Zhidao/add" target="main"><i class="icon-font">&#xe006;</i>添加知道</a></li>
                        <li><a href="__APP__/Fabu/oper" target="main"><i class="icon-font">&#xe008;</i>可领养宠物信息</a></li>
                        <li><a href="__APP__/Fabu/add" target="main"><i class="icon-font">&#xe008;</i>发布宠物信息</a></li>
                        <li><a href="__APP__/Renling/oper" target="main"><i class="icon-font">&#xe008;</i>认领信息</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <form action="__APP__/Baike/oper" method="post" target="main">
    <input type="search" name="type" value="输入萌犬类别" style="width:130px;" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '输入萌犬类别';}"/>
    <input type="submit" value="搜索"/>
    </form>
    <!--/sidebar-->
</div>
</body>
</html>