<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Database.php');
	include_once ($filepath.'/../helpers/Format.php');

class User{
	private $db;
	private $fm;
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}

	public function getAdminData($data){
		$adminUser = $this->fm->validation($data['adminUser']);
		$adminPass = $this->fm->validation($data['adminPass']);
		$adminUser = mysqli_real_escape_string($this->db->link, $adminUser);
		$adminPass = mysqli_real_escape_string($this->db->link, md5($adminPass));
	}

	public function getAllUser(){
		$query = "SELECT * FROM tbl_user ORDER BY userid ASC";
		$result= $this->db->select($query);
		return $result;
	}

	public function disableUser($userid){
		$query = "UPDATE tbl_user
				  SET 
				  status = '1'
				  WHERE userid = '$userid'";
		$updated_row = $this->db->update($query);
		if ($updated_row) {
				$msg = "<span class='success'>User Disabled!</span>";
				return $msg;
			}else{
				$msg = "<span class='error'>User Not Disabled!</span>";
				return $msg;
			}	
	}

	public function enableUser($userid){
		$query = "UPDATE tbl_user
				  SET 
				  status = '0'
				  WHERE userid = '$userid'";
		$updated_row = $this->db->update($query);
		if ($updated_row) {
				$msg = "<span class='success'>User Enabled!</span>";
				return $msg;
			}else{
				$msg = "<span class='error'>User Not Enabled!</span>";
				return $msg;
			}	
	}

	public function deleteUser($userid){
		$query = "DELETE FROM tbl_user WHERE userid = '$userid'";
		$deldata = $this->db->delete($query);
		if ($deldata) {
				$msg = "<span class='success'>User Removed!</span>";
				return $msg;
			}else{
				$msg = "<span class='error'>User Not Removed!</span>";
				return $msg;
			}
	}

}
?>