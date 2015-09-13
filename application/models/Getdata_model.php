<?php

	class Getdata_model extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function getData($offset,$page){
			$str="select * from app limit $offset,$page";
			$query=$this->db->query($str);
			return $query;
		}
		public function allRows(){
			$query=$this->db->query("select * from app");
			return $query->num_rows();
		}
	}

?>
