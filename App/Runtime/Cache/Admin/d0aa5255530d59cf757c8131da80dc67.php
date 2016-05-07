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
            <form name="myform" id="myform" method="post">
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>萌犬类别</th>
                            <th>图片</th>
                            <th>描述</th>
                            <th>添加时间</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($baikeArr)): foreach($baikeArr as $key=>$v): ?><tr>
							<td><?php echo ($v["type"]); ?></td>
							<td><img width="180" src="__PUBLIC__/upload/<?php echo ($v["image"]); ?>" /></td>
							<td><?php echo mystr($v['description'],0,60,"utf-8","...");?></td>
							<td><?php echo ($v["addTime"]); ?></td>
							<td>
								<a href="__APP__/Baike/detail/id/<?php echo ($v["baikeId"]); ?>">查看</a>&nbsp;|&nbsp;
								<a href="__APP__/Baike/update/id/<?php echo ($v["baikeId"]); ?>">更改</a>&nbsp;|&nbsp;
								<a href="__APP__/Baike/del/id/<?php echo ($v["baikeId"]); ?>">删除</a>
							</td>
                        </tr><?php endforeach; endif; ?>
                    </table>
                    <div class="list-page"><?php echo ($showStr); ?></div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>