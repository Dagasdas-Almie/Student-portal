<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="/myschool@sdssu-tagbina/assets/18ded439/jquery.js"></script>
<script type="text/javascript" src="/myschool@sdssu-tagbina/assets/18ded439/jquery.yiiactiveform.js"></script>
<title>
        MySchool @ Surigao del Sur State University - Tagbina    </title>
    <!-- 4 stats -->
    <link rel="shortcut icon" href="/myschool@sdssu-tagbina/css/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/myschool@sdssu-tagbina/css/bootstrap.min.css" type="text/css" media="screen"/>
    <link href="/myschool@sdssu-tagbina/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="/myschool@sdssu-tagbina/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet"/>
    <link href="/myschool@sdssu-tagbina/css/plugins/timeline/timeline.css" rel="stylesheet"/>
    <link href="/myschool@sdssu-tagbina/css/Aristo/Aristo.css" rel="stylesheet"/>
    <link href="/myschool@sdssu-tagbina/css/tables.css" rel="stylesheet"/>
    <link href="/myschool@sdssu-tagbina/css/ui-selene/jquery-ui-1.8.17.custom.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/myschool@sdssu-tagbina/css/sb-admin.css" type="text/css" media="screen"/>
    <link href="/myschool@sdssu-tagbina/css/custom_style.css" rel="stylesheet"/>
    <!-- Core Scripts - Include with every page -->
    <script type="text/javascript" src="/myschool@sdssu-tagbina/js/jquery.min.js"></script>
    <script type="text/javascript" src="/myschool@sdssu-tagbina/js/jquery-ui-1.8.16.custom.min.js"></script>
    <script src="/myschool@sdssu-tagbina/js/bootstrap.min.js"></script>
    <script src="/myschool@sdssu-tagbina/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <!-- SB Admin Scripts - Include with every page -->
    <script src="/myschool@sdssu-tagbina/js/sb-admin.js"></script>
    <!--[if IE]>
<link rel="stylesheet" href="/myschool@sdssu-tagbina/css/ie.css" type="text/css" media="screen" />
<![endif]-->
</head>
<body>

<style>
    body {
	    background-color: #c9c9c9;
	    height: 100vh;
    }
    #login-ribbon{
        width: 73px;
        height: 103px;
        background: url(https://sdssu-tagbina.edu.ph/myschool@sdssu-tagbina/images/graduation.png) no-repeat;
        background-size: 73px 103px;
        position: absolute;
        text-align: center;
        z-index: 10;
    }
    #login-circle{
        font-size: 18px;
        color: #fff;
    }
    #LoginForm_password{
        background-image: url(https://sdssu-tagbina.edu.ph/myschool@sdssu-tagbina/images/key.png)!important;
        background-repeat: no-repeat;
        background-position: 6px center;
        padding-left: 28px;
    }
    #LoginForm_username{
        background-image: url(https://sdssu-tagbina.edu.ph/myschool@sdssu-tagbina/images/user.png)!important;
        background-repeat: no-repeat;
        background-position: 6px center;
        padding-left: 28px;
    }
    #login-wrap {
        width: 278px;
        background: url(https://sdssu-tagbina.edu.ph/myschool@sdssu-tagbina/images/login-wrap-bg.png);
        background-size: 32px 32px;
        margin: auto;
        position: relative;
        border: 1px solid #000;
        padding: 15px;
        padding-top: 60px;
        -webkit-box-shadow: 0 0 6px rgba(0,0,0,0.5),inset 0 1px 0 rgba(255,255,255,0.2);
        -moz-box-shadow: 0 0 6px rgba(0,0,0,0.5),inset 0 1px 0 rgba(255,255,255,0.2);
        box-shadow: 0 0 6px rgba(0,0,0,0.5),inset 0 1px 0 rgba(255,255,255,0.2);
        -webkit-border-radius: 6px;
        -moz-border-radius: 6px;
        border-radius: 6px;
    }
    .errorMessage{
	    color: red;
    }
    #login-logo{
	    text-align: center;
    }
    #login-logo img{
	    box-shadow: 3px 2px 3px #141d50;
	    border-radius: 80px;
	    width: 128px;
	    height: 128px;
    }
    img {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
</style>

<div class="container">
<div class="row">
<div class="col-md-4 col-md-offset-4">
<div class="login-panel panel panel-default">
<div class="panel-heading">
<h1><img src="https://sdssu-tagbina.edu.ph/myschool@sdssu-tagbina/images/logo.png" class="center" height="45%" width="45%"></h1>
<h3 style="text-align: center" class="panel-title panel-default" id="login-circle">MySchool @ SDSSU Tagbina</h3>
</div>
<div class="panel-body">

<form id="login-form" action="/myschool@sdssu-tagbina/index.php" method="post">
<fieldset>
<div class="form-group">
<input name="LoginForm[username]" id="LoginForm_username" type="text" class="form-control" placeholder="User ID" autofocus>
<div class="errorMessage" id="LoginForm_username_em_" style="display:none"></div></div>
<div class="form-group">
<input name="LoginForm[password]" id="LoginForm_password" type="password" class="form-control" placeholder="Password">
<div class="errorMessage" id="LoginForm_password_em_" style="display:none"></div></div>
<div class="checkbox">
<input id="ytLoginForm_rememberMe" type="hidden" value="0" name="LoginForm[rememberMe]" /><input name="LoginForm[rememberMe]" id="LoginForm_rememberMe" value="1" type="checkbox" /><label for="LoginForm_rememberMe">Remember me next time</label><div class="errorMessage" id="LoginForm_rememberMe_em_" style="display:none"></div></div>
<input class="btn btn-lg btn-primary btn-block" type="submit" name="yt0" value="Login" /></form>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
/*<![CDATA[*/
jQuery(function($) {
jQuery('#login-form').yiiactiveform({'validateOnSubmit':true,'attributes':[{'id':'LoginForm_username','inputID':'LoginForm_username','errorID':'LoginForm_username_em_','model':'LoginForm','name':'username','enableAjaxValidation':false,'clientValidation':function(value, messages, attribute) {

if(jQuery.trim(value)=='') {
	messages.push("Username cannot be blank.");
}

}},{'id':'LoginForm_password','inputID':'LoginForm_password','errorID':'LoginForm_password_em_','model':'LoginForm','name':'password','enableAjaxValidation':false,'clientValidation':function(value, messages, attribute) {

if(jQuery.trim(value)=='') {
	messages.push("Password cannot be blank.");
}

}},{'id':'LoginForm_rememberMe','inputID':'LoginForm_rememberMe','errorID':'LoginForm_rememberMe_em_','model':'LoginForm','name':'rememberMe','enableAjaxValidation':false,'clientValidation':function(value, messages, attribute) {

if(jQuery.trim(value)!='' && value!="1" && value!="0") {
	messages.push("Remember me next time must be either 1 or 0.");
}

}}],'errorCss':'error'});
});
/*]]>*/
</script>
</body>
</html>