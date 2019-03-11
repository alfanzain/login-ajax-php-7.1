<?php
//for test 500
// header("HTTP/1.0 500 Internal Server Error");
// die();

$host		=	"localhost";
$user		=	"root";
$pw			=	"";
$db			=	"db_login_ajax";
$conn = new mysqli($host, $user, $pw, $db);

// Check connection
if ($conn->connect_error) {
	echo 500;
} 
else 
{
	$user = $_POST['user'];
	$pass = md5($_POST['pass']);

	// Check from database
	$query = $conn->query("SELECT * FROM tbl_login WHERE username = '".$user."' AND password = '".$pass."'");

	if($query->num_rows > 0) {
		echo 1;
	} else {
		echo 2;
	}
}
?>