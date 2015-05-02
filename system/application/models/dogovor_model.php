<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



	class Dogovor_model extends CI_Model {

		public function add_dogovor($add) {

			$this->db->insert('dogovor',$add);
			$id_dog = $this->db->insert_id();

			return $id_dog;

		}

		public function get_new_id_dogovor() {

			$query = $this->db->query('SELECT MAX(id) as mid from dogovor');
			return $query->row();

		}



	}

