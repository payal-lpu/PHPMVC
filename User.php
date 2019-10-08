<?php
	include 'class/DBController.php';
	class User
	{
		function __construct() {
        $this->db_handle = new DBController();
    }
    
		function addStudent() {
        $query = "INSERT INTO tbl_student (name,roll_number,dob,class) VALUES (?, ?, ?, ?)";
        $paramType = "siss";
        $paramValue = array(
            $name,
            $roll_number,
            $dob,
            $class
        );
        
        $insertId = $this->db_handle->insert($query, $paramType, $paramValue);
        return $insertId;
    }
	}
?>