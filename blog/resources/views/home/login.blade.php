<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="always" name="referrer">
    <title>登录</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/home/index.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/home/iconfont/iconfont.css')}}">
    <script type="text/javascript" src="{{asset('/js/home/jquery-1.9.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/home/index.js')}}"></script>
    <script src="{{asset('/js/home/jquery-1.8.2.js')}}" language="JavaScript"></script>

    <style type="text/css">
        body {
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    <script type="text/javascript">
        function browserRedirect() {
            var sUserAgent = navigator.userAgent.toLowerCase();
            var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
            var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
            var bIsMidp = sUserAgent.match(/midp/i) == "midp";
            var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
            var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
            var bIsAndroid = sUserAgent.match(/android/i) == "android";
            var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
            var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
            if(bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM){
                window.location.href = "/index.php/Mobile/Index/index.html";
            }
        }
        browserRedirect();
    </script>
</head>
<body>
<div class="login">
    <form name="queryForm" id="login_form" method="post" action="{{URL('')}}">
        <input type="text" placeholder="账号" name="id" id="username" class="inputone">
        <input type="password" placeholder="密码" name="password" id="password"  class="inputtwo">
        <input type="text" placeholder="验证码" name="verify" id="verify" class="inputthree">
        <img src="{{URL('captcha')}}" style="height:45px;" id="code"  onclick="change_code()" alt="" class="imgs">
         {{csrf_field()}}
        <input type="submit" class="inputfour" id="submit_btn" value="">
        <!-- <a href="zhaohuimima.html" class="lost"><img src="__PUBLIC__/Home/images/13.png" alt=""></a> -->
    </form>
</div>


<script>
    var verifyURL="{{URL('captcha')}}";
    function change_code(){
        $("#code").attr("src",verifyURL+'?'+Math.random());
        return false;
    }
    $('#verify').focus(function(){
        $('#code').trigger('click');
    })
</script>
<script>
    $('#submit_btn').click(function(){

        var phone = $("input[name=telephone]").val();
        var psw = $("input[name=password]").val();
        var verify = $("input[name=verify]").val();
        if(psw =='' ){
            alert('密码不能为空');
            return false;
        }
        if(verify =='' ){
            alert('验证码不能为空');
            return false;
        }
        if(phone && /^1[3|4|5|7|8]\d{9}$/.test(phone)){
            $('#login_form').submit();
            //alert('vvvvvvvv');


        }
    })

</script>
</body>
</html>






