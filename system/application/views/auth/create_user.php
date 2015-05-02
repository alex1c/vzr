
<?php $d = '';
$this->load->view('head_view',$d);
$this->load->view('menu_view', $d);?>


<div class="container">
	<div class="jumbotron">
		<h2>Создание пользователя</h2>
        <p>Заполните данные пользователя</p>
	</div>


    <div class="row">
        <div class="col-md-8">

            <div id="infoMessage"><?php echo $message;?></div>


            <!--Новая форма-->

            <form role="form" action="" class="creat-user">
                <div class="form-group">
                    <label for="first_name">Имя:</label>
                    <input type="text" class="form-control" id="first_name" placeholder="Имя" name="first_name">
                </div>
                <div class="form-group">
                    <label for="last_name">Фамилия:</label>
                    <input type="text" class="form-control" id="last_name" placeholder="Фамилия" name="last_name">
                </div>
                <div class="form-group">
                    <label for="company">Компания:</label>
                    <input type="text" class="form-control" id="company" placeholder="Компания" name="company">
                </div>
                <div class="form-group">
                    <label for="email">email:</label>
                    <input type="text" class="form-control" id="email" placeholder="Почта" name="email">
                </div>
                <div class="form-group">
                    <label for="phone">Телефон:</label>
                    <input type="text" class="form-control" id="phone" placeholder="Телефон" name="phone">
                </div>
                <div class="form-group">
                    <label for="password">Пароль:</label>
                    <input type="password" class="form-control" id="password" placeholder="Пароль" name="password">
                </div>
                <div class="form-group">
                    <label for="password_confirm">Повтор пароля:</label>
                    <input type="password" class="form-control" id="password_confirm" placeholder="Повтор пароля" name="password_confirm">
                </div>

                <?php $link = site_url("/auth/create_user");
                echo "<button class='btn btn-success' formaction=$link	formmethod='post' type='submit' >Создать</button>"; ?>
                </p>


            </form>

        </div><!--<div class="col-md-8">-->
        <div class="col-md-4">


        </div> <!-- <div class="col-md-4">-->
    </div>




</div>



<?php  $d = ''; $this->load->view('footer_view',$d );  ?>