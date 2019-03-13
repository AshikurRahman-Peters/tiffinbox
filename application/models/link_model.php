<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Link_Model extends CI_Model {

	public function __construct()
	{
		$this->load->library('session');
	}

    public function getAll(){
        return $this->db->get('link')->result();
    }
}