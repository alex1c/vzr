<?php $temp_user = $user->username ?> <!--иначе до вывода юзер терялся-->

<?php echo form_open("auth/deactivate/".$user->id);?>

<?php $d = '';
	$this->load->view('head_view',$d);
	$this->load->view('menu_view', $d);?>

	<div class="container">
		<div class="jumbotron">
			<h2>Деактивация пользователя</h2>

			<p><?php echo('Деактивировать пользователя: ' . $temp_user.'?'); ?></p>
		</div>

		<div class="row">
			<div class="col-md-8">

				<!--Новая форма-->

				<form role="form" action="" class="creat-user">

					<div class="form-group">
						<input type="radio" name="confirm" value="yes" checked>Да
						<br>
						<input type="radio" name="confirm" value="no">Нет
						<br><br>
						<?php echo form_hidden($csrf); ?>
						<?php echo form_hidden(array ('id' => $user->id)); ?>
					</div>
					<?php $link = site_url("auth/deactivate/" . $user->id);
						echo "<button class='btn btn-success' formaction=$link	formmethod='post' type='submit' >Выполнить</button>"; ?>
					</p>

				</form>

			</div>
			<!--<div class="col-md-8">-->
			<div class="col-md-4">

			</div>
			<!-- <div class="col-md-4">-->
		</div>
</div>

<?php  $d = ''; $this->load->view('footer_view',$d );  ?>