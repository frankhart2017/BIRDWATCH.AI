<!DOCTYPE html>
<html>
	<head>
		<title>Birdwatch.ai</title>

		<!-- Bootstrap files-->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<style type="text/css">
			.navbar-custom {
				background: #d9abb7;
			}
			body {
				 background: url('images/background.svg');
				 background-size: cover;
				 background-repeat: no-repeat;
			}
			.card {
				margin: 0 auto;
				float: none;
				margin-bottom: 10px;
			}
		</style>

	</head>

	<body>
		<!--Navbar-->
		<nav class="navbar navbar-expand-lg navbar-custom">
		  <a class="navbar-brand" href="#">Birdwatch.ai</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="about.php">About</a>
		      </li>
		    </ul>
		  </div>
		</nav>

		<br><br>

		<?php

			$link = mysqli_connect("localhost", "root", "password@", "birdwatch");

			echo mysqli_error($link);

			$query = "SELECT * FROM `birds`";

			$i = 0;

			if($result = mysqli_query($link, $query)) {
				echo "<div class='row'>";
				while($row = mysqli_fetch_assoc($result)) {
					$image = $row['image'];
					$name = $row['name'];
					$id = $row['id'];
					echo '<div class="card" style="width: 18rem;">';
					echo "<img class='card-img-top' src='images/birds/$image' width='100' height='300' alt='Card image cap'>";
					echo '<div class="card-body">';
					echo "<h5 class='card-title'>$name</h5>";
					echo "<a href='contribute.php?id=$id' class='btn btn-primary'>Contribute image</a>";
					echo '</div></div>';
					$i++;
				}
				echo "</div>";
			}

			?>

	</body>
</html>
