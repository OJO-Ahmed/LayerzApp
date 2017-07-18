<?php
session_start();
include 'socialdb.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql ="INSERT INTO social(first,last,uid,pwd)
VALUES ('$first', '$last', '$uid', '$pwd')";
$result = $conn->query($sql);

header("location: index.php");