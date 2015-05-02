<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



	class Calc extends CI_Controller
	{

//генерируем страницу открываемую из меню. Список догoворов
		public function list_dogovor_form()
		{

			if ( $this->ion_auth->logged_in() ) {

				$loggedin = true;//не чем было занять переменную
				$data['loggedin'] = $loggedin;
				$this->load->view('head_view', $data);
				$this->load->view('menu_view', $data);
				$this->load->view('list_dogovor_view', $data);
				$this->load->view('footer_view', $data);

			} else {
				$loggedin = false;
				redirect('auth/login', 'refresh');
			}
		}

		//форма ввода новых догворов. При открытии запрашивает последний ид догвора и
		// передает в открываемую форму форму следующий
		public function input_dogovor_form() {

			if ( $this->ion_auth->logged_in() ) {

				//$loggedin = true;
				//$data['loggedin'] = $loggedin;
				$this->load->model('dogovor_model');
				$id =	$this->dogovor_model->get_new_id_dogovor();


				$this->load->view('head_view');
				$this->load->view('menu_view');
				$this->load->view('input_dogovor_view', $id);
				$this->load->view('footer_view');

			} else {
				$loggedin = false;
				redirect('auth/login', 'refresh');
			}

		}


//валидируем полученные поля из формы ввода
//добавим страхователя, получем его ид и используем при записи договора
		public function add_dogovor()
		{
			if ( $this->ion_auth->logged_in() ) {

				$this->load->library('form_validation');

				print_r($_POST);
				//если new =1 тогда записываем если нет то обновляем
				//не забыть прислать сюда и ид страхователя для обновления

				if ( isset($_POST['add']) ) {

					$this->form_validation->set_rules('date_birth', 'date_birth', 'required');
					$this->form_validation->set_rules('number', 'number', 'required');
					$this->form_validation->set_rules('strahovatel', 'strahovatel', 'required');
					$this->form_validation->set_rules('passp_seria', 'passp_seria', 'required');
					$this->form_validation->set_rules('passp_nomer', 'passp_nomer', 'required');
					$check = $this->form_validation->run();

					if ( $check == TRUE ) {

						//сначала добавим страхователя, вернем его ид и запишем договор
						$strahovatel['name'] = $this->input->post('strahovatel');
						$strahovatel['date_birth'] = $this->input->post('date_birth');
						$strahovatel['passp_seria'] = $this->input->post('passp_seria');
						$strahovatel['passp_nomer'] = $this->input->post('passp_nomer');
						$strahovatel['autor'] = $user = $this->ion_auth->user()->row()->id;

						$this->load->model('peoples_model');
						$id_strah = $this->peoples_model->add_strahovatel($strahovatel);
						//$id_strah; //ид записанного страхователя
						//конец сначала добавим страхователя

						//соберем массив для записи договора
						$add['comment'] = $this->input->post('comment');
						$add['strahovatel'] = $id_strah;
						//$add['date'] = date('Y-m-d');

						$this->load->model('dogovor_model');
						$id_dog = $this->dogovor_model->add_dogovor($add);
						//$this->load->view('news_view',$data);

						//$this->db->insert('articles', $add);
						//redirect('/calc/list_dogovor_form/', 'refresh');
						//отправляем в форму создания договра ид договора и страхователя
						$data['id_strah'] = $id_strah;
						$data['id_dog'] = $id_dog;

						$this->load->view('head_view',$data);
						$this->load->view('menu_view',$data);
						$this->load->view('input_dogovor_view',$data);
						$this->load->view('footer_view',$data);
					} else {
						//$this->load->view('editNews_view');
						echo 'поля не прошли проверку';
					}
				} else {
					echo 'нет данных для добавления';
				}

			} else {
				$loggedin = false;
				redirect('auth/login', 'refresh');
			}

		}

		public function apdate_dogovor() {

			echo 'apdate';

		}

		public function add_polis() {

			if ( $this->ion_auth->logged_in() ) {

				$this->load->library('form_validation');

				if ( isset($_POST['add']) ) {

					$this->form_validation->set_rules('date_birth', 'date_birth', 'required');
					$this->form_validation->set_rules('passp_seria', 'passp_seria', 'required');
					$this->form_validation->set_rules('passp_nomer', 'passp_nomer', 'required');
					$this->form_validation->set_rules('strahovatel', 'strahovatel', 'required');
					$check = $this->form_validation->run();

					if ( $check == TRUE ) {

						//сначала добавим страхователя, вернем его ид и запишем договор
						$strahovatel['name'] = $this->input->post('strahovatel');
						$strahovatel['date_birth'] = $this->input->post('date_birth');
						$strahovatel['passp_seria'] = $this->input->post('passp_seria');
						$strahovatel['passp_nomer'] = $this->input->post('passp_nomer');
						$strahovatel['autor'] = $user = $this->ion_auth->user()->row()->id;

						$this->load->model('peoples_model');
						$id_strah = $this->peoples_model->add_strahovatel($strahovatel);
						//$id_strah; //ид записанного страхователя
						//конец сначала добавим страхователя

						//соберем массив для записи договора
						$add['comment'] = $this->input->post('comment');
						$add['strahovatel'] = $id_strah;
						//$add['date'] = date('Y-m-d');

						$this->load->model('dogovor_model');
						$this->dogovor_model->add_dogovor($add);
						//$this->load->view('news_view',$data);

						//$this->db->insert('articles', $add);
						redirect('/calc/list_dogovor_form/', 'refresh');
					} else {
						//$this->load->view('editNews_view');
						echo 'поля не прошли проверку';
					}
				} else {
					echo 'нет данных для добавления';
				}

			} else {
				$loggedin = false;
				redirect('auth/login', 'refresh');
			}

		}

	}



