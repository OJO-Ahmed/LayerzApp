<?php
require_once 'socialdb.php';

if ($_SESSION['user_data'] && $_SESSION['user_data']['id']) {
	unset($_SESSION['user_data']);
	header('Location: index.php');
}