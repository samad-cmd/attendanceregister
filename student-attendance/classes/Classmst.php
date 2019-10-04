<?php 
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Database.php');
	include_once ($filepath.'/../helpers/Format.php');
?>
<?php
/**
 * Student Class
 */
class Classmst{
	private $db;
	private $fm;
	
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}

	public function getClasses(){
		//$query = "SELECT s.id, s.classid, s.name, s.roll, c.classname  FROM tbl_student s, classmst c where s.classid=c.classid";
		$query = "SELECT *  FROM  classmst ";
		$result = $this->db->select($query);
		return $result;
	}

}

?>