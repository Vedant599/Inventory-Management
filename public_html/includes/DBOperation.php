<?php

/**
 * DB Operation
 */
class DBOperation
{
	private $conn;
	function __construct()
	{
		include_once("../database/db.php");
		$db= new database();
		$this->conn = $db->connect();
	}
	public function addCategory($parent,$cat)
	{
		$pre_stmt=$this->conn->prepare("INSERT INTO `categories`(`parent_cat`, `category_name`, `status`) VALUES (?,?,?)");
		$status=1;
		$pre_stmt->bind_param("isi",$parent,$cat,$status);
		$result=$pre_stmt->execute() or die($this->conn->error);
		if ($result) {
			return "CATEGORY_ADDED";
		}
		else
		{
			return 0;
		}
	}
	public function getAllRecord($table)
	{
		$pre_stmt=$this->conn->prepare("SELECT * FROM ".$table);
		$pre_stmt->execute() or die($this->conn->error);
		$result=$pre_stmt->get_result();
		$rows=array();
		if ($result->num_rows>0) {
			while($row = $result->fetch_assoc())
			{
				$rows[]=$row;
			}
			return $rows;
		}
		else
		{
			return "NO_DATA";
		}
	}
}
// $opr= new DBOperation();
// // echo $opr->addCategory(1,"Mobiles");

// print_r($opr->getAllRecord("categories"));
?>