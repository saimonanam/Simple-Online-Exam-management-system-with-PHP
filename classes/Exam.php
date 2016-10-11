<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Database.php');
	include_once ($filepath.'/../helpers/Format.php');

class Exam{
	private $db;
	private $fm;
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}

	public function getQueByOrder(){
		$query  ="SELECT * FROM tbl_ques ORDER BY quesNo ASC";
		$result = $this->db->select($query);
		return $result;
	}

	public function delQuestion($quesNo){
		$tables = array("tbl_ques","tbl_ans");
		foreach ($tables as $table) {
			$delquery = "DELETE FROM $table WHERE quesNo='$quesNo'";
			$deldata = $this->db->delete($delquery);
		}

		if ($deldata) {
			$msg = "<span class='success'>Data Deleted Successfully</span>";
			return $msg;
		}else{
			$msg = "<span class='success'>Data Not Deleted</span>";
			return $msg;
		}
	}

}
?>