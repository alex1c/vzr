<?php $d = '';
	$this->load->view('head_view',$d);
	$this->load->view('menu_view', $d);?>


<div id="infoMessage"><?php echo $message;?></div>


<div class="container">
	<div class="jumbotron">
		<h2>Создание группы</h2>
		<p>Заполните данные группы</p>
	</div>


	<div class="row">
		<div class="col-md-8">

			<div id="infoMessage"><?php echo $message;?></div>

			<!--Новая форма-->

			<form role="form" action="" class="creat-user">
				<div class="form-group">
					<label for="group_name">Имя группы:</label>
					<input type="text" class="form-control" id="group_name" placeholder="Имя группы" name="group_name">
				</div>
				<div class="form-group">
					<label for="description">Описание:</label>
					<input type="text" class="form-control" id="description" placeholder="Описание" name="description">
				</div>

				<?php $link = site_url("/auth/create_group");
					echo "<button class='btn btn-success' formaction=$link	formmethod='post' type='submit' >Создать</button>"; ?>
				</p>


			</form>

		</div><!--<div class="col-md-8">-->
		<div class="col-md-4">


		</div> <!-- <div class="col-md-4">-->
	</div>


</div>


<?php  $d = ''; $this->load->view('footer_view',$d );  ?>