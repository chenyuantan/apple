<?php 
use yii\helpers\Url;
 ?>
 <base href="http://www.lagouyii.com/frontend/public/">
 </script>
<link href="h/images/favicon.ico" rel="Shortcut Icon">
<link href="style/css/style.css" type="text/css" rel="stylesheet">
<link href="style/css/external.min.css" type="text/css" rel="stylesheet">
<link href="style/css/popup.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="style/js/jquery.1.10.1.min.js"></script>
<script src="style/js/jquery.lib.min.js" type="text/javascript"></script>
<script type="text/javascript" src="style/js/ajaxfileupload.js"></script>
<script src="style/js/additional-methods.js" type="text/javascript"></script>
<!--[if lte IE 8]>
    <script type="text/javascript" src="style/js/excanvas.js"></script>
<![endif]-->
<script type="text/javascript">
var youdao_conv_id = 271546; 
</script> 
<script src="style/js/conv.js" type="text/javascript"></script>
<script src="style/js/ajaxCross.json" charset="UTF-8"></script></head>

   <div id="body">
    <div id="header">
        <div class="wrapper">
            <a class="logo" href="h/">
                <img width="229" height="43" alt="拉勾招聘-专注互联网招聘" src="style/images/logo.png">
            </a>
            <ul class="reset" id="navheader">
                <li class="current"><a href="<?=Url::toRoute(['index/index']) ?>">首页</a></li>
                <li ><a href="companylist.html" >公司</a></li>
                <li ><a href="h/toForum.html" target="_blank">论坛</a></li>
                <li ><a href="<?=Url::toRoute(['index/jian']) ?>" rel="nofollow">我的简历</a></li>
                <li class="current"><a rel="nofollow" href="jianli.html">我的简历</a></li>
            </ul>

            <dl class="collapsible_menu">
                <dt>
                    <span>jason&nbsp;</span> 
                    <span class="red dn" id="noticeDot-0"></span>
                    <i></i>
                </dt>
                                    <dd><a rel="nofollow" href="jianli.html">我的简历</a></dd>
                                        <dd><a href="collections.html">我收藏的职位</a></dd>
                                                            <dd class="btm"><a href="subscribe.html">我的订阅</a></dd>
                    <dd><a href="create.html">我要招人</a></dd>
                                                <dd><a href="accountBind.html">帐号设置</a></dd>
                                <dd class="logout"><a rel="nofollow" href="login.html">退出</a></dd>
            </dl>
                                    <div class="dn" id="noticeTip">
                <span class="bot"></span>
                <span class="top"></span>
                <a target="_blank" href="delivery.html"><strong>0</strong>条新投递反馈</a>
                <a class="closeNT" href="javascript:;"></a>
            </div>
                    </div>
    </div><!-- end #header -->