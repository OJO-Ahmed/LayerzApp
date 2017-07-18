<?php
	require_once 'socialdb.php';
	if (!filter_input(INPUT_GET, 'id')) {
		header('Location: index.php');
	}

	//Query DB Here
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
<div id="wrapper">
	<div id="main">
		<section>
			<a href="logout.php">Log <?= $_SESSION['user_data']['uid']; ?> Out</a>
			<div class="row">
				<label for="gender">Gender</label>
				<select id="gender">
				<option value="A">All</option>
				<option value="M">Male</option>
				<option value="F">Female</option>
				</select>
			</div>
			<div class="row">
				<label for="hobby">Hobbies</label>
				<input type="text" id="hobby" />
			</div>
			<div class="row">
				<button id="searchBtn">Search</button>
			</div>
		</section>
		<section id="result">
			<!-- <div class="person-row">
				<a href="pix/profile1.png">
				<img class="profile" src="pix/profile1.png" alt="profile pix" />
				</a>
				<div class="person-info">
				<h3 class="name">Carolina</h3>
				<div>sports, pets, party</div>
				</div>
				<button>Add as a friend</button>
			</div>
			<div class="person-row">
				<a href="pix/profile1.png">
				<img class="profile" src="pix/profile1.png" alt="profile pix" />
				</a>
				<div class="person-info">
				<h3 class="name">Carolina</h3>
				<div>sports, pets, party</div>
				</div>
				<button>Add as a friend</button>
			</div>
			<div class="person-row">
				<a href="pix/profile1.png">
				<img class="profile" src="pix/profile1.png" alt="profile pix" />
				</a>
				<div class="person-info">
				<h3 class="name">Carolina</h3>
				<div>sports, pets, party</div>
				</div>
				<button>Add as a friend</button>
			</div>
 -->		
 		</section>
	</div>
	<footer>
	&copy; Connecting Careers. All Right Reserved
	</footer>
</div>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>