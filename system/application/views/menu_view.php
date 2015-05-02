<!-- NAVBAR

================================================== -->

<div class="navbar-wrapper">

	<div class="container">

		<nav class="navbar navbar-inverse navbar-static-top">

			<div class="container">

				<div class="navbar-header">

					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

						<span class="sr-only">Toggle navigation</span>

						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>

					</button>

					<?php
						$link = site_url();
						echo "<li class='navbar-brand'><a href= $link >GUIDEH</a></li>";
					?>

				</div>

				<div id="navbar" class="navbar-collapse collapse">

					<ul class="nav navbar-nav">

						<?php
							$link = site_url();
							echo "<li class='active'><a href= $link >Главная</a></li>";
						?>

						<li class="dropdown">

							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
							   aria-expanded="false">Оформление <span class="caret"></span></a>

							<ul class="dropdown-menu" role="menu">

								<?php
									$link = site_url('/calc/list_dogovor_form');
									echo "<li><a href= $link >ВЗР</a></li>";
								?>

							</ul>

						</li>

						<li class="dropdown">

							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
							   aria-expanded="false">Настройки <span class="caret"></span></a>

							<ul class="dropdown-menu" role="menu">

								<?php
									$link = site_url('/user_setting/setting_prog');
									echo "<li><a href= $link >Настройки тарифов</a></li>";
								?>
								<?php
									$link = site_url('/user_setting/setting_agent');
									echo "<li><a href= $link >Настройки пользователей</a></li>";
								?>

							</ul>

						</li>

						<?php if ($this->ion_auth->in_group('supervisor'))
							//$user_groups = ;
						{
							//echo print_r($this->ion_auth->get_users_groups()->result());
							$link = site_url('/news/');
							echo "<li><a href= $link >Новости</a></li>";
						}
						?>

						<?php
							$link = site_url('/auth/logout');
							echo "<li><a href= $link >Выйти</a></li>";
						?>

						<?php

							$user = $this->ion_auth->user()->row();
							$link = site_url('/user_setting');
							echo "<li><a href= $link >$user->first_name</a></li>";
							//	echo "<li>$user->username </li>"?>


					</ul>

				</div>

			</div>

		</nav>

	</div>

</div>