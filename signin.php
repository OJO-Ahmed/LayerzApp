<?php
require_once 'socialdb.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql ="SELECT*FROM social WHERE uid='$uid' AND pwd ='$pwd'";
$result = $conn->query($sql);
 if(!$row = $result->fetch_assoc()){
 	echo "Your username or password is incorrect!";
 } else {
 	$_SESSION['user_data'] = $row;
 	$link = 'user.php?id=' . $row["id"] . '';
 	header("Location: " . $link);
 }
