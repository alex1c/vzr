<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Articles_model extends CI_Model {

function get_articles() {
	$this->db->order_by('id','desc');
$query = $this->db->get('articles');

	return $query->result_array();
}

	}


