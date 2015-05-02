<div class="container-fluid newsblock">


	<h3>Список договоров<span class="label label-default"></span></h3>

	<?php	header('Content-Type: text/html; charset=utf-8');

		$link = site_url('/calc/input_dogovor_form/');


		echo "<form action=$link method='post'>

Номер договора </br><input type='text' name='comment' class='form-control' placeholder='Комментарий'/> <?=form_error('comment')?> </br>

Текст новости </br><textarea  name='text' rows='10' cols='40' class='form-control' placeholder='Текст'>  </textarea> <?=form_error('text')?> </br>

<!--Дата добавления </br><input type='text' name='date' class='form-control' placeholder='Дата'/><?=form_error('date')?></br>-->

<input type='submit' name='add' value='Добавить' class='btn btn-primary btn-lg'/></br>


</form>";

		echo form_error('title');

	?>

</div>