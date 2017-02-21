<?php 
	header("Content-Type:text/html; charset=utf-8");
	
	if(!isset($_COOKIE["login"])){

		header("Location: /login.php");
		}
	else{	
		?>
您已登入
<?php } ?>