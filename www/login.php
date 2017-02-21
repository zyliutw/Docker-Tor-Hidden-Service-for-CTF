<?php 
	if($_POST[password] == 'TWweebsaewfaf@@#$%^^%#@!#AFewfewffe' 
		&& $_POST[username] == 'TWweebsaewfaf@@#$%^^%#@!#AFewfewffeWAFEAWF!!!!ff$$$222'){
			setcookie("login",'USER', time()+3600);
			header("Location: /index.php");
	} else {
?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" dir="ltr" lang="zh-tw">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" dir="ltr" lang="zh-tw">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" dir="ltr" lang="zh-tw">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html dir="ltr" lang="zh-tw">
<!--<![endif]-->
<head>
		<title>Login System</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    	<meta http-equiv="Content-Script-Type" content="text/javascript">
        <meta http-equiv="Content-Style-Type" content="text/css">
		<link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Mono' rel='stylesheet' type='text/css'>
		<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]--> 
<style>
* {
    margin: 0px auto;
}
	body {
	font-size: 0.98em; /* Resets 1em to 10px */
    font-family: Arial, Helvetica, sans-serif; 
    background-image:url(img/bg1.jpg);
    background-attachment:fixed;
	}
#login-content{
	margin:0 auto;
	padding:10px;
	width:auto;
}
#login-wraper{
	width:40%;
	padding:0;
	margin-top:15%;
}
</style>
</head>
<body style="background-image:url(login-bg.jpg);background-repeat:no-repeat;background-color:#000;">
<div id="login-wraper">
	<div class="webname">
		<h1 style="padding:0;text-align:center;"><span title="Login System" style="font-size:2.9rem;font-family: 'Gloria Hallelujah', cursive;">Login</span></h1>
	</div>
	<div id="login-content">
	    <form method="post" action="login.php" style="width:100%;margin:0 auto;">
	        <div style="margin:0 auto;text-align:center;"><label for="user_login"><input id="username" type="text" size="28" name="username" value="" style="font-family:'PT Mono', sans-serif;border: 1px solid rgb(120, 59, 168);margin-bottom: 15px;font-size: 107% !important;padding: 5px;height: 23px;width: 10rem;border-radius: 3px;" onblur="if(this.value=='') this.value=this.defaultValue" onfocus="if(this.value==this.defaultValue) this.value=''" placeholder="Username" /></label></div>
	        <div style="margin:0 auto;text-align:center;"><label for="user_password"><input id="password" type="password" size="28" name="password" value="" style="font-family:'PT Mono', sans-serif;border: 1px solid rgb(120, 59, 168);margin-bottom: 15px;font-size: 107% !important;padding: 5px;height: 23px;width: 10rem;border-radius: 3px;" onblur="if(this.value=='') this.value=this.defaultValue" onfocus="if(this.value==this.defaultValue) this.value=''" placeholder="Password" /></label></div>
			<div style="margin:0 auto;text-align:center;"><button type="submit" style="font-size:1.2rem;font-family: 'PT Mono', sans-serif;border-radius: 2px;background-color: rgb(110, 50, 157);padding: 5px;background-image: -moz-linear-gradient(left center , rgb(110, 50, 157) 0%, rgb(110, 50, 157) 100%);border: 1px solid rgb(82, 38, 117);color: #FFF;line-height: 1.88rem;width: 10rem;" title="Pass" name=".login" value="Pass" >Pass</button></div>
		</form>
	</div>
</div><!-- wrapper -->
</body>
</html>
<?php  } ?>

<!-- NTHU_IS{Te11_Y0U_a_Secret_ONionnnn} -->