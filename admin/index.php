<?php
	

	$dsn='mysql:host=localhost;dbname=shopping';
	$username='root';
	$passwd='qwe123456';
		 	$pdo = new PDO($dsn,$username,$passwd);

	
	// try {
	// 	 	$pdo = new PDO($dsn,$username,$passwd);
	// 	} catch(PDOException $e) {
 //    		die("ERROR!:".$e->getMessage().'<br/>');
 //    	}
	
	echo '<h1>登录成功，这里是后台主页面</h1>'
?>