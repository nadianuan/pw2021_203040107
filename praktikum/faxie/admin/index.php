
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HijabYess - Login Admin</title>
	<link rel="stylesheet" href="res/css/style.css">
	<link rel="stylesheet" href="res/plugin/FontAwesome/css/font-awesome.min.css">
</head>
<body>
	<div id="container" data-background="res/img/bg.jpg">
		<div class="box box-sm">
			<div class="logo">
				<span style="color:rgba(255,255,255,.4);">Form Login</span>
				<h1 style="font-size:32pt;letter-spacing:-3px;">HIJAB<span style="color:yellow">YESS</span></h1>
			</div>
			<div class="form">
				<form action="loginact.php" method="POST">
					<div class="form-group">
						<span class="form-icon"><i class="fa fa-user"></i></span>
						<input name="username" type="text" class="form-input" placeholder="username">
					</div>
					<div class="form-group">
						<span class="form-icon"><i class="fa fa-lock"></i></span>
						<input name="password" type="password" class="form-input" placeholder="password">
					</div>
					<button class="btn btn-warning btn-block">Login</button>
					<div class="form-text">
						<center> Copyright © 2017. Owner HijabYess. </center>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="res/plugin/jQuery/jquery-3.2.1.slim.min.js"></script>
	<script type="text/javascript" src="res/js/script.js"></script>
</body>
</html>