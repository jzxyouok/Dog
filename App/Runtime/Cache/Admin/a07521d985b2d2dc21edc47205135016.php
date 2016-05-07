<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/main.css"/>
    <script type="text/javascript" src="__PUBLIC__/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="container clearfix">
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="#">首页</a><span class="crumb-step">&gt;</span><span class="crumb-step"></span><span>新增百科</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="__APP__/Fabu/usave" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <input type="hidden"  name="fabuId" value="<?php echo ($arr["fabuId"]); ?>"/>
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>萌犬类别：</th>
                                <td>
                                    <input class="common-text required" id="type" name="type" size="50" value="<?php echo ($arr["type"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>图片：</th>
                                <td><img src="__PUBLIC__/upload/<?php echo ($arr["image"]); ?>" /></td>
                            </tr>
                            <tr>
                                <th>描述：</th>
                                <td><textarea name="description" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"><?php echo ($arr["description"]); ?></textarea></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="发布" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>