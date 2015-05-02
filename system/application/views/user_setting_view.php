<div class="container-fluid ">


	<div class=" col-md-8 bg  ">

		<?php

			$user = $this->ion_auth->user()->row();

		?>

		<form id="data">


			<ul class="list-group">

				<li class="list-group-item"><b>Ваш ID: </b><?php echo $user->id ?></li>

				<li class="list-group-item"><b>Ваш IP адрес: </b><?php echo $user->ip_address ?></li>

				<li class="list-group-item"><b>Ваше имя пользователя: </b><?php echo $user->username ?></li>

				<li class="list-group-item"><b>Ваш email: </b><?php echo $user->email ?></li>

				<li class="list-group-item"><b>Пользователь создан: </b><?php echo date("F j, Y, g:i a",$user->created_on) ?></li>

				<li class="list-group-item"><b>Последний вход: </b><?php echo date("F j, Y, g:i a",$user->last_login) ?></li>

				<li class="list-group-item"><b>Имя: </b><?php echo $user->first_name ?><input type="text" size="50" class="my-input"  value="<?php echo $user->first_name ?>" name="first_name"></li>

				<li class="list-group-item"><b>Фамилия: </b><?php echo $user->last_name ?><input type="text" size="50" class="my-input" value="<?php echo $user->last_name ?>" name="last_name"></li>

				<li class="list-group-item"><b>Компания: </b><?php echo $user->company ?><input type="text" size="50" class="my-input" value="<?php echo $user->company ?>" name="company"> </li>

				<li class="list-group-item"><b>Телефон: </b><?php echo $user->phone ?> <input type="text" size="50" class="my-input" value="<?php echo $user->phone ?>" name="phone"> </li>

			</ul>



			<!--			--><?php //$csrf = array(
				//			'name' => $this->security->get_csrf_token_name(),
				//			'hash' => $this->security->get_csrf_hash()
				//			);
				//			?>
			<!--			<input type="hidden" name="--><?//=$csrf['name'];?><!--" value="--><?//=$csrf['hash'];?><!--" />-->


			<?php

				$user = $this->ion_auth->user()->row();

				echo form_hidden('id', $user->id);
				// echo form_hidden($csrf);

				$link = site_url('/auth/edit_user/'.$user->id);

				echo "<button class='btn btn-success' formaction=$link	formmethod='post' type='submit' form='data'>Изменить</button>";

			?>


		</form>


	</div>

	<div class=" col-md-4 bg  " style="min-height:465px"  >


	</div>
</div>

