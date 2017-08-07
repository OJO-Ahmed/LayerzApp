<?php
if(!isset($_SESSION)){
	session_start();
	ini_set('session.gc_maxlifetime', 60 * 60 * 24);
}
require_once 'socialdb.php';


$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$salt1 = "qm&h*";
$salt2 = "pg!@";
$prtpwd = hash('ripemd128', "$salt1$pwd$salt2");

if(empty($uid) || empty($pwd)){
	echo "The username and password are required fields. Please fill
them out to sign in.";
}
elseif (isset($uid) && isset($pwd)){
	//setting cookies and selecting from database
	setcookie("uid", "social[$uid]", time()+60*5);
	setcookie("uid", "social[$pwd]", time()+60*5);

	$sql ="SELECT*FROM social WHERE uid='$uid' AND pwd ='$prtpwd'";
	$result = $conn->query($sql);
	 if(!$row = $result->fetch_assoc()){
	 	echo "Your username or password is incorrect!".$_COOKIE['uid'];
	 } else {
	 	$_SESSION['user_data'] = $row;
	 	$link = 'user.php?id=' . $row["id"] . '';
	 	header("Location: " . $link);
	 }

}
// header("Location: index.php");