<?php
	Class  User_Model extends CI_Model {
		public function __construct()
		{
			parent:: __construct();
		}
		public function deleteDataUser($userID)
		{
			$query = "delete from User where Id_User = " . $userID;
			$this->db->query($query);
		}
		public function insertIntoTableUser($userName, $fullName, $emailAddress, $password, $role)
		{
			$query = "insert into User ( User_Name, Full_Name, Email_Address, Password, Role) values ('".$userName."','".$fullName."','".$emailAddress."','".$password."','".$role."')";
			$this->db->query($query);
			return ($this->db->insert_id());
		}
		public function updateDataUser($userId, $userName, $fullName, $emailAddress)
		{
			$query = "update User set User_Name = '" .$userName." ', Full_Name = '".$fullName . " ', Email_Address = '" . $emailAddress. "' where Id_User = ". $userId ;
			$this->db->query($query);
		}
		public function checkUserExistWithUserName($userName){
			$query = "select * from User where User_Name = '" .$userName."'";
			$q = $this->db->query($query);
			if($q->num_rows() == 1)
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		public function checkUserExistWithEmailAddresss($emailAddress)
		{
			$query = "select * from User where Email_Address = '" .$emailAddress."'";
			$q = $this->db->query($query);
			if($q->num_rows() == 1)
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		public function getAllUser()
		{
			$query = "select Id_User,User_Name, Full_Name, Email_Address from User";
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
		public function getUserWithID($userID)
		{
			$query = "select Id_User,User_Name, Full_Name, Email_Address from User where Id_User = ". $userID;
			$q = $this->db->query($query);
			if($q->num_rows() ==1 )
			{	
				return $q->row();
			}
			else
			{
				return null;
			}
		}
		public function getUserExistWithUserNameAndPassword($userName, $password)
		{
			$query = "select * from User where User_Name = '". $userID ."' and Password = '". $password ."'";
			$q = $this->db->query($query);
			if($q->num_rows() ==1 )
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