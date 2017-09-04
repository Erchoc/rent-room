<?php
	
	function connectDB() {
	    $dsn='mysql:host=localhost;dbname=wordpress';
	    $username='root';
	    $passwd='AIni310932019';
		try {
		 	$pdo = new PDO($dsn,$username,$passwd);
		 	echo '数据库连接成功';
		} catch(PDOException $e) {
    		die("ERROR!:".$e->getMessage().'<br />');
    	}
	}
	
	function do_login() {
		$user = $_POST["username"];
		$psw = $_POST["password"];
		if($user == "" || $psw == "") {
			echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
		} else {
			$pdo=connectDB();
			$sql = "select user_login,useremail from wp_users where user_login = '$_POST[username]' and user_email = '$_POST[password]'";
			$result = $pdo->query($sql);
			if($result) {
				$row = mysql_fetch_array($result);	//将数据以索引方式储存在数组中
				echo $row[0];
			} else {
				echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";
			}
		}
	}
	

	
?>