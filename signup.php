<?php
if(!isset($_SESSION)){
	session_start();
}

require_once 'socialdb.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$salt1 = "qm&h*";
$salt2 = "pg!@";
$prtpwd = hash('ripemd128', "$salt1$pwd$salt2");

$sql ="INSERT INTO social(first,last,uid,pwd)
VALUES ('$first', '$last', '$uid', '$prtpwd')";
$result = $conn->query($sql);

header("location: index.php");