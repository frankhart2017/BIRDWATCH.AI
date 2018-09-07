<!DOCTYPE html>
<html>
	<head>
		<title>Birdwatch.ai</title>

		<!-- Bootstrap files-->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu" rel="stylesheet">

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
      .about {
        margin: 0 auto;
        border: 1px solid black;
        margin-left: 100px;
        margin-right: 100px;
        border-radius: 10px;
        padding: 10px;
      }
		</style>

	</head>

	<body>
		<!--Navbar-->
		<nav class="navbar navbar-expand-lg navbar-custom">
		  <a class="navbar-brand" href="home.php">Birdwatch.ai</a>
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

    <div class='about'>
      <h3 style="font-family: 'Baloo Tammudu', cursive; text-align: center;">About Us</h3>
      <p>Birdwatch.ai aims to help photographers identify the species of birds from pictures uploaded by the user.
      This will help the user to get knowledge about the image.</p>
      <p>We use novel computer vision algorithms to identify the species of bird from an image and from that identified
        name more information is provided to the user.</p>
      <p>All bird lovers and bird photographers are requested to contribute images to the database so that the budding
        bird lovers and photographers (both professional and amateur in the field of bird photography) may get necessary
        assistance to identify the birds which they can publish.</p>
      <p>For further queries drop a mail at: <strong>sdharchou@gmail.com</strong></p>

    </div>

	</body>
</html>
