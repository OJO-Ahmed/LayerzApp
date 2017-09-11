<?php
if(!isset(isset($_SESSION)){
	session_start();
}
require_once 'socialdb.php';

if ($_SESSION['user_data'] && $_SESSION['user_data']['id']) {
	setcookie("uid", "", time()-60*60*24, '/');
	unset($_SESSION['user_data']);
	header('Location: index.php');
}else{
	header('Location: index.php');
}
