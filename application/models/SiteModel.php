<?php

class SiteModel extends CI_Model {

	public function getMenu($group_name){
		$this->db->where('group_name',$group_name);
		$query = $this->db->get('menu');
		return $query;
	}

}
