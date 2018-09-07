<?php

  $link = mysqli_connect("localhost", "root", "password@", "birdwatch");

  if(isset($_POST['submit'])) {
    if($_POST['name'] != "" && $_POST['email'] != "" && $_FILES['image']['name'] != "") {
      $id = $_GET['id'];
      if(move_uploaded_file($_FILES['image']['tmp_name'], "images/birds/contributed/$id/".$_FILES['image']['name'])) {

        $query = "INSERT INTO `contributions`(`name`, `email`, `type`, `image`) VALUES('".mysqli_real_escape_string($link, $_POST['name'])."', '".mysqli_real_escape_string($link, $_POST['email'])."','".$id."', '".mysqli_real_escape_string($link, $_FILES['image']['name'])."')";

        if(mysqli_query($link, $query)) {

          $to = $_POST['email'];
          $subject = "Thanks for submission";
          $message = '
Dear '.$_POST['name'].',

Thanks for your valuable submission, we will notify you once the product is launched!

Regards
Team Birdwatch.ai
          ';
          $headers = 'From:noreply@birdwatch-ai.com' . "\r\n";
          if(mail($to, $subject, $message, $headers)) {
              echo "<script> alert('Data updated successfully!'); </script>";
          }
        }

      } else {
        echo "<script> alert('Failed to upload image!'); </script>";
      }
    } else {
      echo "<script> alert('Complete the form!'); </script>";
    }
  }

?>

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
      .form-group {
        float: left;
        margin-left: 100px;
        border: 2px solid black;
        border-radius: 10px;
        padding: 10px;
      }
      .input {
        padding: 5px 10px;
        border: 2px solid black;
        border-radius: 10px;
      }
      .submit {
        padding: 5px 10px;
        background: white;
        border: 2px solid black;
        border-radius: 10px;
        color: black;
        font-weight: bold;
      }
      .submit:hover {
        background: black;
        color: white;
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

    <?php

      $query = "SELECT * FROM `birds` WHERE `id` = '".mysqli_real_escape_string($link, $_GET['id'])."'";

      $row = mysqli_fetch_assoc(mysqli_query($link, $query));

      echo "<div style='padding-left: 10px;'>";
      echo "<img src='images/birds/".$row['image']."' width='350' height='350' style='float: left;'>";
      echo "<div style='float: left; padding-left: 10px;'>";
      echo "<p><strong>Name:&nbsp</strong>".$row['name']."</p>";
      echo "<p><strong>Scientific name:&nbsp</strong><em>".$row['name']."</em></p>";
      echo "<p><strong>Kingdom:&nbsp</strong>".$row['kingdom']."</p>";
      echo "<p><strong>Phylum:&nbsp</strong>".$row['phylum']."</p>";
      echo "<p><strong>Class:&nbsp</strong>".$row['class']."</p>";
      echo "<p><strong>Order:&nbsp</strong>".$row['ord']."</p>";
      echo "<p><strong>Family:&nbsp</strong>".$row['family']."</p>";
      echo "<p><strong>Genus:&nbsp</strong>".$row['genus']."</p>";
      echo "</div>";

    ?>



    <form method="post" class='form-group' enctype="multipart/form-data">
      <p><input type="text" name="name" placeholder="Enter name" class="input" value="<?php echo $_POST['name']; ?>"></p>
      <p><input type="email" name="email" placeholder="Enter email address" class="input" value="<?php echo $_POST['email']; ?>"></p>
      <label for="image"><strong>Select image:</strong></label>
      <p><input type="file" accept="image/*" id="image" name="image"></p>
      <p><input type="submit" name="submit" value="Submit photo" class="submit"></p>
    </form>

	</body>
</html>
