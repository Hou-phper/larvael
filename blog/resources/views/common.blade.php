<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>测试分类-@yield('title')</title>
    <meta name="keywords" content="测试分类关键词"/>
    <meta name="description" content="测试分类描述"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <meta name="author" content="baijunyao,baijunyao@baijunyao.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="/demo/Public/static/bootstrap-3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/demo/Public/static/bootstrap-3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="/demo/Public/static/font-awesome-4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/demo/Public/static/css/bjy.css">
    <link rel="stylesheet" type="text/css" href="/demo/Template/default/Home/Public/css/index.css">
    <link rel="stylesheet" type="text/css" href="/demo/Public/static/css/animate.css">
</head>
<body>
<header id="b-public-nav" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span><span class="icon-bar"></span><
                span class="icon-bar"></span></button>
            <a class="navbar-brand" href="/" onclick="recordId('/',0)">
                <div class="hidden-xs b-nav-background"></div>
                <ul class="b-logo-code">
                    <li class="b-lc-start">&lt;?php</li>
                    <li class="b-lc-echo">echo</li>
                </ul>
                <p class="b-logo-word">'白俊遥博客'</p>
                <p class="b-logo-end">;</p></a></div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav b-nav-parent">
                <li class="hidden-xs b-nav-mobile"></li>
                <li class="b-nav-cname  "><a href="/" onclick="recordId('/',0)">首页</a></li>
                <li class="b-nav-cname b-nav-active "><a href="/demo/index.php/Home/Index/category/cid/28"
                                                         onclick="return recordId('cid',28)">测试分类</a></li>
                <li class="b-nav-cname  "><a href="/demo/index.php/Home/Index/chat">随言碎语</a></li>
                <li class="b-nav-cname hidden-sm   "><a href="/demo/index.php/Home/Index/git">开源项目</a></li>
            </ul>
            <ul id="b-login-word" class="nav navbar-nav navbar-right">
                <li class="b-nav-cname b-nav-login">
                    <div class="hidden-xs b-login-mobile"></div>
                    <a href="javascript:;" onclick="login()">登录</a></li>
            </ul>
        </div>
    </div>

</header>
<div class="b-h-70"></div>
<div id="b-content" class="container">

    <div class="row">

        <div class="col-xs-12 col-md-12 col-lg-8">
            @section('body')
            <div class="row b-one-article"><h3 class="col-xs-12 col-md-12 col-lg-12"><a class="b-oa-title"
                                                                                        href="/demo/index.php/Home/Index/article/aid/17"
                                                                                        target="_blank"
                                                                                        onclick="return recordId('cid',28)">测试文章标题</a>
                </h3>
                <div class="col-xs-12 col-md-12 col-lg-12 b-date">
                    <ul class="row">
                        <li class="col-xs-5 col-md-2 col-lg-3"><i class="fa fa-user"></i> 白俊遥</li>
                        <li class="col-xs-7 col-md-3 col-lg-3"><i class="fa fa-calendar"></i> 2015-05-26 22:18:29</li>
                        <li class="col-xs-5 col-md-2 col-lg-2"><i class="fa fa-list-alt"></i> <a
                                    href="/demo/index.php/Home/Index/category/cid/28" target="_blank">测试分类</a>
                        <li class="col-xs-7 col-md-5 col-lg-4 "><i class="fa fa-tags"></i><a class="b-tag-name"
                                                                                             href="/demo/index.php/Home/Index/tag/tid/20"
                                                                                             target="_blank">测试标签</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-4 hidden-xs">
                            <figure class="b-oa-pic b-style1"><a href="/demo/index.php/Home/Index/article/aid/17"
                                                                 target="_blank"><img
                                            src="/demo/Upload/image/ueditor/20150601/1433171136139793.jpg" alt="侯钰坤博客"
                                            title="侯钰坤博客"></a>
                                <figcaption><a href="/demo/index.php/Home/Index/article/aid/17" target="_blank"></a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-xs-12 col-sm-6  col-md-6 col-lg-8 b-des-read"> 测试文章描述</div>
                    </div>
                </div>
                <a class=" b-readall" href="/demo/index.php/Home/Index/article/aid/17" target="_blank">阅读全文</a></div>
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12 b-page">
                    <div class="page"><a class="first" href="/demo/index.php/Home/Index/category/cid/28/p/1">首页</a> <a
                                class="prev not-allowed" href="javascript:;">上一页</a> <span class="current">1</span> <a
                                class="next not-allowed" href="javascript:;">下一页</a> <a class="end"
                                                                                        href="/demo/index.php/Home/Index/category/cid/28/p/1">末页</a>
                        <span class="rows">共 1 条记录</span></div>
                </div>
            </div>
            @show
        </div>


        <div id="b-public-right" class="col-lg-4 hidden-xs hidden-sm hidden-md">
            <div class="b-tags"><h4 class="b-title">热门标签</h4>
                <ul class="b-all-tname">
                    <li class="b-tname"><a class="tstyle-1" href="/demo/index.php/Home/Index/tag/tid/20"
                                           onclick="return recordId('tid',20)">测试标签 (1)</a></li>
                </ul>
            </div>
            <div class="b-recommend"><h4 class="b-title">置顶推荐</h4>
                <p class="b-recommend-p"><a class="b-recommend-a" href="/demo/index.php/Home/Index/article/aid/17"
                                            target="_blank"><span class="fa fa-th-list b-black"></span> 测试文章标题</a></p>
            </div>
            <div class="b-link"><h4 class="b-title">最新评论</h4>
                <div></div>
            </div>
            <div class="b-search">
                <form class="form-inline" role="form" action="/demo/index.php/Home/Index/search" method="get"><input
                            class="b-search-text" type="text" name="search_word"> <input class="b-search-submit"
                                                                                         type="submit" value="全站搜索">
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <footer id="b-foot" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <ul>
                <li class="text-center"> 本站使用自主开发的<a rel="nofollow" href="http://git.oschina.net/shuaibai123/thinkbjy"
                                                     target="_blank">bjyblog v1.1</a>开源博客程序搭建 © 2014-2016 baijunyao.com
                    版权所有 ICP证：豫ICP备14009546号-3
                </li>
                <li class="text-center"> 联系邮箱：baijunyao@baijunyao.com</li>
            </ul>
            <div class="b-h-20"></div>
            <a class="go-top fa fa-angle-up animated jello" href="javascript:;" onclick="goTop()"></a></footer>
    </div>
</div>

<script src="/demo/Public/static/js/jquery-2.0.0.min.js"></script>
<script>
    logoutUrl = "/demo/index.php/Home/User/logout";
</script>
<script src="/demo/Public/static/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script src="/demo/Public/static/pace/pace.min.js"></script>
<script src="/demo/Template/default/Home/Public/js/index.js"></script>
<!-- 百度页面自动提交开始 -->
<script>
    (function () {
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        }
        else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
</script>
</body>
</html>
