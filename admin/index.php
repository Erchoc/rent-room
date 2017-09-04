<?php
	
	 $dsn='mssql:host=localhost;dbname=demo';
	    $username='sa';
	    $passwd='AIni310932019';
		try {
		 	$pdo = new PDO($dsn,$username,$passwd);
		} catch(PDOException $e) {
    		die("ERROR!:".$e->getMessage().'<br />');
    }
	
	
	echo '<h1>登录成功，这里是后台主页面</h1>'
?>