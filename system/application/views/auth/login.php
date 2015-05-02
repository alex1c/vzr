<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<META NAME="Description" content="">
	<META NAME="Keywords" content="">
	<TITLE>page</TITLE>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script>
	</script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

	<style type="text/css">
		body {
			padding-top: 40px;
			padding-bottom: 40px;
			background-color: #eee;
		}

		.form {
			max-width: 330px;
			padding: 15px;
			margin: 0 auto;
		}
		.form-signin .form-signin-heading,
		.form-signin .checkbox {
			margin-bottom: 10px;
		}
		.checkbox {
			font-weight: normal;
		}
		.form-control {
			position: relative;
			height: auto;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			padding: 10px;
			font-size: 16px;
		}
		.form-control:focus {
			z-index: 2;
		}
		. input[type="text"] {
			margin-bottom: -1px;
			border-bottom-right-radius: 0;
			border-bottom-left-radius: 0;
		}
		. input[type="password"] {
			margin-bottom: 10px;
			border-top-left-radius: 0;
			border-top-right-radius: 0;
		}
		.container{
			margin-bottom: 10px;
			border-top-left-radius: 0;
			border-top-right-radius: 0;
			max-width: 50%;
			text-align: center;
		}
		.btn-primary{
			max-width: 50%;
			position: relative;
			text-align: center;
			left: 25%;
		}
	</style>

</head>
<body>

<div id="infoMessage"><?php echo $message; ?></div>

<?php echo form_open('auth/login'); ?>
<div class="container">

	<form class="form-signin">
		<h2 class="form-signin-heading">Пожалуйста введите данные для входа</h2>
		<div id="infoMessage"><?php echo $message; ?></div>
		<label for="inputEmail" class="sr-only">Логин</label>

		<?php $identity['placeholder']=' Login '  ?>
		<?php $identity['class']=' form-control '  ?>
		<?php echo form_input($identity); ?>

		<label for="inputPassword" class="sr-only">Пароль</label>

		<?php $password['class']=' form-control '  ?>
		<?php $password['placeholder']=' Password '  ?>
		<?php echo form_input($password); ?>
		<!--<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>-->


		<p><a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a></p>
		<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
		<label for="remember">Запомнить меня</label>

		<!--<div class="checkbox">
			<label>
				<input type="checkbox" value="remember-me"> Запомнить меня
			</label>-->
</div>

<button class='btn btn-lg btn-primary btn-block' type="submit">Войти</button>

</form>

</div> <!-- /container -->

<?php echo form_close(); ?>

</body>
</html>