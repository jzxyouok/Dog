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
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="#">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">百科列表</span></div>
        </div>
        <div class="result-wrap">
	          <div class="result-content">
	             <table class="result-tab" width="100%">
	                 <tr>
	                     <td width="8%">名字</td>
	                     <td><?php echo ($arr["name"]); ?></td>
	                 </tr>
	                 <tr>
	                     <td>内容</td>
	                     <td><?php echo ($arr['content']); ?></td>
	                 </tr>
	                 <tr>
	                     <td>电话</td>
	                     <td><?php echo ($arr['tel']); ?></td>
	                 </tr>
	                 <tr>
	                     <td>邮箱</td>
	                     <td><?php echo ($arr['email']); ?></td>
	                 </tr>	                 
	                 <tr>
	                     <td>日期</td>
	                     <td><?php echo ($arr["addTime"]); ?></td>
	                 </tr>					
	             </table>
	         </div>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>