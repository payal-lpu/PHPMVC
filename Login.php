<?php
	class Login
	{
		public $username;
		public $password;
		
		private $db_handle;
    
		function __construct()
		{
			$this->db_handle = new DBController();
		}
		
		public function getUsername()
		{
			echo "username";
		}
		
		public function display()
		{
			echo "display";
		}
	}
?>