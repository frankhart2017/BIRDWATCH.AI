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
		        <a class="nav-link" href="#">About</a>
		      </li>
		    </ul>
		  </div>
		</nav>

		<br><br>

		<!--Cards level 1-->
		<div class="row">
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src=".../100px180/" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <a href="#" class="btn btn-primary">Contribute image</a>
			  </div>
			</div>

			<?php

				$link = mysqli_connect("localhost:8889", "root", "", "birdwatch");

				echo mysqli_error($link);

				$query = "SELECT * FROM `birds`";

				$i = 0;

				$birds = Array();

				if($result = mysqli_query($link, $query)) {
					while($row = mysqli_fetch_assoc($result)) {
						array_push($birds, "Hello");
					}
				}

				print_r($birds);

			?>

		</div>

	</body>
</html>
