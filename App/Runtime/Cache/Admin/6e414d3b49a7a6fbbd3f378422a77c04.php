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
            <div class="crumb-list"><i class="icon-font"></i><a href="#">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">知道列表</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>标题</th>
                            <th>内容</th>
                            <th>添加时间</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($docArr)): foreach($docArr as $key=>$v): ?><tr>
							<td><?php echo ($v["title"]); ?></td>
							<td><?php echo mystr($v['content'],0,60,"utf-8","...");?></td>
							<td><?php echo ($v["addTime"]); ?></td>
							<td>
								<a href="__APP__/Doc/detail/id/<?php echo ($v["docId"]); ?>">查看</a>&nbsp;|&nbsp;
								<a href="__APP__/Doc/update/id/<?php echo ($v["docId"]); ?>">更改</a>&nbsp;|&nbsp;
								<a href="__APP__/Doc/del/id/<?php echo ($v["docId"]); ?>">删除</a>
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