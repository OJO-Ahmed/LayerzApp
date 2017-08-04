<?php
session_start();

$conn = mysqli_connect("localhost","$db_username","$db_password","socialApp");
if(!$conn){
	die("Connection failed:".mysqli_connect_error());
}
