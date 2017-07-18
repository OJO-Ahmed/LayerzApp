<?php
	require_once 'socialdb.php';
	if ($_SESSION['user_data'] && $_SESSION['user_data']['id']) {
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
</header>
<div id="homewrapper">
	<div id="homemain">
		<section >
			<img id="image" src="pix/homepix.png" alt = "picture"/>
		</section>
		<section id="signin">
			<div class = "form">
				<form action="signin.php" method="POST">
				<input type="text" id="username" placeholder="username" name="uid"/><br/>
				<input type="password" id="pwd" placeholder="password"  name="pwd"/><br/>
				<input type="submit" value="Sign in" />
				</form>
		</section>
		<section id="Signup">
			<div class = "form">
				<form action="signup.php" method="POST">
				<label for="firstname">firstname</label>
				<input type="text" id="firstname" placeholder="firsname" name="first" /><br/>
				<label for="lastname">lastname</label>
				<input type="text" id="lastname" placeholder="lastname" name="last"/><br/>
				<label for="username">username</label>
				<input type="text" id="username" placeholder="username" name="uid"/><br/>
				<label for="pwd">password</label>
				<input type="password" id="pwd"  name="pwd"/><br/>
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
