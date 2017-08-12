<?php
class Enroll_model extends CI_Model
	{
	
	public function __construct()
		{

		}

///////////////////////////////////////////////////////////////////////////////////////////////////
	
	function get_Rep($id)
		{
		$this->db->where('ID',$id);
		$query = $this->db->get('Reps');
		
		if($query->num_rows() == 1)
			{RETURN $query->result_array();}
		else
			{RETURN NULL;}
		}

	function prog_info()
		{
		$query = $this->db->get('prog_Info');
		if($query->num_rows() == 1)
			{RETURN $query->result_array();}
		else
			{RETURN NULL;}
		}
		
	function insert_record($table, $data)
		{
		$this->db->insert($table, $data);
		RETURN $this->db->affected_rows();
		}
	}