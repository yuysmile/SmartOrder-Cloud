<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <title><?php echo (C("sitename")); ?></title>
    <!--link rel="stylesheet" type="text/css" href="<?php echo (C("URL")); ?>/style.css" />
    <script type="text/javascript" src="<?php echo (C("URL")); ?>/js.js"></script-->
    <meta name="keywords" content="<?php echo (C("keywords")); ?>"/>
    <meta name="description" content="<?php echo (C("description")); ?>"/>
</head>
<body>
<div class="file_holder">
    <div class="file_title">
        <i class="octicon octicon-book"></i>

    </div>
    <div class="file_content markdown-body">
        <h1><a class="anchor" id="Admin" href="#Admin"></a>Admin</h1>
        <p>基于thinkphp与aceadmin模板的后台管理系统</p>

        <p><strong>===============================安装说明================================</strong></p>

        <p>1.sql.sql文件导入到数据库中。</p>

        <p>2.在文件App/Common/Conf/db.php设置数据库相关信息</p>

        <p>3.在文件App/Common/Conf/config.php设置COOKIE_SALT。</p>


        <p>4.配置完成。</p>

        <p>后台地址：<a href="<?php echo U('Admin/login/index');?>">进入后台管理系统</a> 账号admin 密码 admin</p>

        <p><strong>=============================相关信息====================================</strong></p>

        <p><strong>演示地址</strong>：<a href="http://demo.Admin.qiawei.com/index.php/Admin/">http://demo.Admin.qiawei.com/index.php/Admin/</a>
            账号admin 密码 admin</p>

        <p><strong>官网地址</strong>：<a href="http://Admin.qiawei.com/">http://Admin.qiawei.com/</a></p>

        <p><strong>QQ交流群</strong>：231272191</p>

        <p>欢迎大家有进行沟通交流！</p>

        <p>开源是一种精神！为中国的互联网行业发展献出一份小小的力量~~</p>

        <p><strong>==================================后台截图==================================</strong></p>

        <p><img alt="image" src="https://github.com/qiaweicom/Admin/raw/master/screenshots/login.png"></p>

        <p><img alt="image" src="https://github.com/qiaweicom/Admin/raw/master/screenshots/index.png"></p>

        <p><img alt="image" src="https://github.com/qiaweicom/Admin/raw/master/screenshots/person.png"></p>

        <p><img alt="image" src="https://github.com/qiaweicom/Admin/raw/master/screenshots/member.png"></p>

        <p><img alt="image" src="https://github.com/qiaweicom/Admin/raw/master/screenshots/group.png"></p>

        <p><img alt="image" src="https://github.com/qiaweicom/Admin/raw/master/screenshots/Database.png"></p>

        <p><img alt="image" src="https://github.com/qiaweicom/Admin/raw/master/screenshots/new_add.png"></p>

        <p><img alt="image" src="https://github.com/qiaweicom/Admin/raw/master/screenshots/links.png"></p>

        <p><img alt="image" src="https://github.com/qiaweicom/Admin/raw/master/screenshots/menu.png"></p>
    </div>
</div>
</body>
</html>