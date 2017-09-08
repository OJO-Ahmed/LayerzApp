<?php
if(!isset($_SESSION)){
	session_start();
}
	require_once 'socialdb.php';

	if(isset($_COOKIE['uid']) && isset($_COOKIE['pwd'])){
	header('Location: user.php?id='.$_SESSION['user_data']['id'].'');
	}
	elseif ($_SESSION['user_data'] && $_SESSION['user_data']['id']) {
		header('Location: user.php?id='.$_SESSION['user_data']['id'].'');
	}
?>
<!doctype html>
<html>
<head>
<meta charset ="utf-8">
<title>Wanna Meet Someone</title>
<link rel ="stylesheet" href="css/style.css">
</head>
<body>
<header>
	<div id="menu">
		<img id ="logo" src="pix/layerz.jpg" alt="logo">
		<h2><span id="meet">Meet</span> wonderful <span id="people">people</span></h2>
	</div>
	<section id="signin">
			<form action="signin.php" method="POST">
			<input type="text" id="username" placeholder="username" name="uid"/>
			<input type="password" id="pwd" placeholder="password"  name="pwd"/>
			<input type="submit" value="Sign in" />
			</form>
	</section>
</header>
<div id="homewrapper">
	<div id="homemain">
		<section >
			<img id="image" src="" alt = "place ur choice picture"/>
		</section>
		<section id="Signup">
			<div class = "form">
				<form action="signup.php" method="POST">
				<p>
				<label for="firstname">firstname</label>
				<input type="text" id="firstname" name="first" /><br/>
				</p>
				<p>
				<label for="lastname">lastname</label>
				<input type="text" id="lastname" name="last"/><br/>
				</p>
				<p>
				<label for="username">username</label>
				<input type="text" id="username" name="uid"/><br/>
				</p>
				<p>
				<label for="pwd">password</label>
				<input type="password" id="pwd" name="pwd"/><br/>
				</p>
				<input type="submit" value="Sign up" />
				</form>
			</div>
		</section>
	</div>
	<footer>
	&copy; Connecting Careers. All Right Reserved
	</footer>
</div>
</body>
</html>
