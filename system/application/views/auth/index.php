
<div class="container">
	<div class="jumbotron">
		<h2>Администрирование пользователей</h2>
		<p>Список пользователей</p>
	</div>


<div id="infoMessage"><?php echo $message;?></div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-12"></div>

<table cellpadding=0 cellspacing=10 class="table table-striped table-bordered table-hover">
	<tr>
		<th>Имя</th>
		<th>Фамилия</th>
		<th>mail</th>
		<th>Группы</th>
		<th>Статус</th>
		<th>Действие</th>
	</tr>
	<?php foreach ($users as $user):?>
		<tr>
            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
			<td>
				<?php foreach ($user->groups as $group):?>
					<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
                <?php endforeach?>
			</td>
			<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, 'Активный') : anchor("auth/activate/". $user->id, 'Не активный');?></td>
			<td><?php echo anchor("auth/edit_user/".$user->id, 'Редактировать') ;?></td>
		</tr>
	<?php endforeach;?>
</table>

			<form id="creatbutton">
				<p><?php $link = site_url("/auth/create_user");
						echo "<button class='btn btn-success' formaction=$link	formmethod='post' type='submit' form='creatbutton'>Создать пользователя</button>"; ?>

				<?php $link = site_url("/auth/create_group");
						echo "<button class='btn btn-success' formaction=$link	formmethod='post' type='submit' form='creatbutton'>Создать группу</button>"; ?>
				</p>
			</form>

		</div>

	  </div>

	</div>