<?php
class Api_model extends CI_Model
	{
	
	public function __construct()
		{

		}

///////////////////////////////////////////////////////////////////////////////////////////////////
	
	function get_Rep()
		{
		
		}

	function allContractVerbage($utility=null, $type=null)
		{
		//Utility input is the same format as found in the database
		//therefore it can be applied straight to the where statement
		if($utility != null)
			{$this->db->where('Utility',$utility);}
		
		//if the type is supplied...
		if($type != null)
			{
			//unfortunately it is supplied in a different format than in that database
			//so it has to be applied to a case switch to convert the formatting
			//could have been simpler if I would have planned things out better
			switch($type)
				{
				case 'residential':
					$this->db->where('ContractType','Residential'); 
					break;
				case 'small':
					$this->db->where('ContractType','Small Commercial');
					break;
				case 'large':
					$this->db->where('ContractType','Large Commercial');
					break;
				}
			}
		//After all the where conditions are applied (if they are applied)
		//throw the get question and get some answers
		$query = $this->db->get('contractVerbage');
		RETURN $query;
		}
		
	function insert_record($table, $data)
		{
		$this->db->insert($table, $data);
		RETURN $this->db->affected_rows();
		}
	}