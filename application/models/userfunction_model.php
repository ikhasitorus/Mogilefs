<?php
	Class  UserFuction_Model extends CI_Model {
		public function __construct()
		{
			parent:: __construct();
		}
		public function insertToTableUserfunction($idUser, $idFunction)
		{
			$query = "insert into User_Function ( Id_User, Id_Function) values (".$idUser. ",".$idFunction.")";
			$this->db->query($query);
			return ($this->db->insert_id());
		}
		public function deleteDataUserFuntionWithUserId($idUser)
		{
			$query = "delete from User_Function where Id_User = " . $userID;
			$this->db->query($query);
		}
		public function getAllDataUserFunction(){
			$query = "select * from User_Function";
			$q = $this->db->query($query);
			if($q->num_rows() > 0 )
			{
				return $q->result();
			}
			else
			{
				return null;
			}
		}
		public function checkExistUserFunction($idUser, $idFunction){
			$query = "select * from User_Function where Id_User = ".$idUser." and Id_Function= ". $idfunction;
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
	}
?>