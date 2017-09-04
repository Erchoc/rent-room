<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0" />
	<title>MSSQL课程设计-登录后台</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

<body>
<div class="box">
	<div class="login-box">
		<div class="login-title text-center">
			<h1><small>登录</small></h1>
		</div>
		<div class="login-content">
			<div class="form">
				<form action="common/login.php" method="post">
					<div class="form-group">
						<div class="col-xs-12">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input type="text" id="username" name="username" class="form-control" placeholder="用户名" maxlength="15">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-12">
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
								<input type="password" id="password" name="password" class="form-control" placeholder="密码" maxlength="15">
							</div>
						</div>
					</div>
					<div class="form-group form-actions">
						<div class="col-xs-4 col-xs-offset-4 ">
							<button type="submit" class="btn btn-sm btn-info">登录</button>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-6 link">
							<p class="text-center remove-margin"><small>忘记密码?</small> <a href="javascript:alert('这个按钮效果没实现哦')" ><small>找回</small></a>
							</p>
						</div>
						<div class="col-xs-6 link">
							<p class="text-center remove-margin"><small>还没注册?</small> <a href="javascript:alert('请登陆后创建用户');" ><small>注册</small></a>
							</p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>