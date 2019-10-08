<?php
include './class/DBController.php';
include './class/Login.php';

$db_handle = new DBController();

$action = "";
if (! empty($_GET["action"])) {
    $action = $_GET["action"];
}
switch ($action) {
    case "register":
        require_once "web/registerForm.php";
		break;
		
	case "login":
		require_once "web/loginForm.php";
		break;
		
	case "checkUser":
		echo "Inside Check USer";
		
    default:
		require_once "web/choose.php";
}

?>
