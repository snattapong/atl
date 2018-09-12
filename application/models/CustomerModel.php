<?php

class CustomerModel extends CI_Model {

	public function getCustomerInfo()
	{
				$customers=$this->db->get('customer');
				return $customers;
	}
public function getCustomerContact()
	{
				$customers=$this->db->get('v_customer_contact');
				return $customers;
	}


}
