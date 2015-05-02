

<div class="container-fluid newsblock">


	<h3>Добавление договора<span class="label label-default"></span></h3>

	<?php	header('Content-Type: text/html; charset=utf-8');

		$link = site_url('/calc/add_dogovor/');
		$link_polis = site_url('/calc/add_polis/');



//echo !isset($id_strah);


		if ( !isset($id_dog) ) {
			//договор не записан
			$curr_dat = date('Y-m-d');
			$mid = 1 + $mid;
			//прибавим единицу к уже существующему номеру
			$strahovatel = '';
			$comment = '';
			$passp_seria = '';
			$passp_nomer = '';
$new = 1;

		}
			else{
				//договор записан, возвращаем на форму все значения
				$curr_dat = $_POST['date_birth'];
				$strahovatel = $_POST['strahovatel'];
				$mid = $_POST['number'];
				$comment = $_POST['comment'];
				$passp_seria = $_POST['passp_seria'];
				$passp_nomer = $_POST['passp_nomer'];
               $new = 0;
				//print_r($_POST);
			}



		echo "<form
} action=$link method='post'>
Страхователь </br><input type='text' name='strahovatel' class='form-control' placeholder='страхователь' value='$strahovatel'  /> <?=form_error('strahovatel')?> </br>

Номер договора </br><input type='text' name='number' class='form-control' placeholder='номер' value=$mid /> <?=form_error('number')?> </br>

Комментарий </br><input type='text' name='comment' class='form-control' placeholder='Комментарий' value='$comment' /> <?=form_error('comment')?> </br>

Паспорт серия </br><input type='text' name='passp_seria' class='form-control' placeholder='серия паспорта' value='$passp_seria' /> <?=form_error('passp_seria')?> </br>
Паспорт номер </br><input type='text' name='passp_nomer' class='form-control' placeholder='номер паспорта'  value='$passp_nomer' /> <?=form_error('passp_nomer')?> </br>

Дата рождения </br><input type='date'  name='date_birth'  class='form-control' value= $curr_dat />  <?=form_error('date_birth')?> </br>

<!--Дата добавления </br><input type='text' name='date' class='form-control' placeholder='Дата'/><?=form_error('date')?></br>-->
<input type='button' formaction=$link_polis name='add_strahovatela_v_polis' value='Добавить полис на страхователя' class='btn btn-primary btn-lg'/></br>

<input type='submit' name='add' value='Записать договор' class='btn btn-primary btn-lg'/></br>

<input type='hidden' name='new' value='$new'>

</form>";

		//$maxid_ = site_url('/calc/get_new_id_dogovor/');

		//$user = $this->ion_auth->user()->row();
		//print_r($mid);


		echo form_error('title');

	?>

</div>
