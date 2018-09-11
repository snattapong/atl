<?php

class SiteModel extends CI_Model {

	public function getMenu($group_name){
		$sql = "CALL sp_getMenu('$group_name',". ( $this->session->has_userdata('user_id') ? 1 : 0 ).")" ;
		$query = $this->db->query($sql);

		//insert this after call store procedure to prevent out of sync in codeigniter 3.0
		mysqli_next_result( $this->db->conn_id );
		return $query;
	}

	public function getStaffInfo()
	{
				$user_id = $this->session->user_id;
				$this->db->where('user_id',$user_id);
				$query=$this->db->get('employee');
				return $query->row();	
	}

	public function staff_login($username,$password){
				//update timestamp
				$this->db->set('last_login',"NOW()",false);	
				$this->db->where('user_id',$username);
				$result=$this->db->update('employee');


				$this->db->where('user_id',$username);
				$this->db->where('password',$password);
				$result=$this->db->get('employee');

				if( $result->num_rows() > 0){
								$row = $result->row();
						$data = array(
								'user_id' =>	$username,
								'full_name' =>	$row->full_name,
								'create_date' =>	$row->create_date,
								'last_login' =>	$row->last_login,
								'job' => $row->job,
								'email' => $row->email,
								'phone' => $row->phone,
								'authority' => $row->authority
						);
						$this->session->set_userdata($data);
						$this->session->mark_as_flash(array('create_date', 'last_login','job','email','phone'));
						if($row->authority == 2)
							redirect(site_url('main/staff'));
						else
							redirect(site_url());
				}else{
						echo "Fila";
						$this->session->sess_destroy();
						redirect(site_url());
				}
	}
}
