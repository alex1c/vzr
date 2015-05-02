<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



	class Peoples_model extends CI_Model {

//добавляем страхователя или застрахоаванного
		public  function add_strahovatel($strahovatel) {

			$this->db->insert('peoples',$strahovatel);
			//получим ид добавленного страхователя
			$id_people = $this->db->insert_id();

			return $id_people;

		}





	}
