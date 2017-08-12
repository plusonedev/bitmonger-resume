<?php
class Contract_model extends CI_Model
	{
	
	public function __construct()
		{
		}
	
	function insert_record($data)
		{
		$this->db->insert('Contracts', $data);
		RETURN $this->db->affected_rows();
		}
	
	function get_records($sessionID)
		{
		$query = "SELECT * FROM `Contracts` WHERE `sessionID` = '".$sessionID."' ORDER BY `ID` DESC";
		if(isset($sessionID))
			{
			$results = $this->db->query($query);
			//$results = $this->db->get('Contracts');
			RETURN $results->result_array();
			}
		}
	
	function contract_verbage($array)
		{
		$this->db->select('*')->from('contractVerbage')->where($array);
		$results = $this->db->get();
		RETURN $results->result_array();
		}
		
	function program_info()
		{
		$results = $this->db->get('prog_Info');
		RETURN $results->result_array();
		}
	
	function batch($sessionID)
		{
		$results = $this->db->get_where('Contracts', array('sessionID' => $sessionID));
		RETURN $results->result_array();
		}
	}