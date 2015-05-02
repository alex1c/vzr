
<?php $d = '';
	$this->load->view('head_view',$d);
	$this->load->view('menu_view', $d);?>


<div class="container">
	<div class="jumbotron">
		<h2>Редактирование пользователя</h2>
		<p>Заполните данные пользователя</p>
	</div>


	<div class="row">
		<div class="col-md-8">

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(uri_string());?>

      <p>
            <?php echo ('Имя');?> <br />
            <?php echo form_input($first_name);?>
      </p>

      <p>
            <?php echo ('Фамилия');?> <br />
            <?php echo form_input($last_name);?>
      </p>

      <p>
            <?php echo ('Компания');?> <br />
            <?php echo form_input($company);?>
      </p>

      <p>
            <?php echo ('Телефон');?> <br />
            <?php echo form_input($phone);?>
      </p>

      <p>
            <?php echo ('Пароль (если меняется)');?> <br />
            <?php echo form_input($password);?>
      </p>

      <p>
            <?php echo ('Повторите пароль (если меняется)');?><br />
            <?php echo form_input($password_confirm);?>
      </p>

      <?php if ($this->ion_auth->is_admin()): ?>

          <h3><?php echo ('Группы пользователя:');?></h3>
          <?php foreach ($groups as $group):?>
              <label class="checkbox">
              <?php
                  $gID=$group['id'];
                  $checked = null;
                  $item = null;
                  foreach($currentGroups as $grp) {
                      if ($gID == $grp->id) {
                          $checked= ' checked="checked"';
                      break;
                      }
                  }
              ?>
              <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
              <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
              </label>
          <?php endforeach?>

      <?php endif ?>

      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>
<?php /*$this->output->enable_profiler(true);*/ ?>
      <p><?php echo form_submit('submit', ('Сохранить данные'));?></p>

<?php echo form_close();?>

		</div><!--<div class="col-md-8">-->
		<div class="col-md-4">


		</div> <!-- <div class="col-md-4">-->
	</div>

</div>



<?php  $d = ''; $this->load->view('footer_view',$d );  ?>
