<?php
	Class  Fuction_Model extends CI_Model {
		public function __construct()
		{
			parent:: __construct();
		}
		public function insertToTablefunction($idFunction, $functionName)
		{
			$query = "insert into Function (Id_Function, Function_Name) values (".$idFunction. ",'".$functionName."')";
			$this->db->query($query);
			return ($this->db->insert_id());
		}
		public function checkExistFunction($functionName){
			$query = "select * from Function where Function_Name= '". $functionName."'";
			$q = $this->db->query($query);
			if($q->num_rows() == 1 )
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		public function deleteDataFuntionWithIdFunction($idFunction)
		{
			$query = "delete from User_Function where Id_Function = " . $idFunction;
			$this->db->query($query);
		}
		public function updateDataFunction($idFunction, $functionName)
		{
			$query = "update User_Function set Id_Function = " .$idFunction." , Function_Name = '".$functionName . "'";
			$this->db->query($query);
		}
	}
?>