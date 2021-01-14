
<?php
	require 'general.php';
	$feedback='';
	if(array_key_exists("name",$_GET))
	{
		$servername = "localhost";
		$username = "root";

		// Create connection
		$conn = mysqli_connect($servername, $username);
		// Check connection
		if (!$conn) {
		  die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "INSERT INTO alextest.contactform (name, email, message) ".
				"VALUES ('".$_GET['name']."','".$_GET['email']."','".$_GET['message']."')";
		$result = $conn->query($sql);
		if($result === true)
		{
			$feedback="<header class='thanks'>Thank You!</header>";
		}else{
			$feedback='Oops, something went wrong: '.$conn->error;
		}
		$conn->close();

		//now email me the contact
		$body="new contact:<br>".$_GET['name']."   ".$_GET['email']."   ".$_GET['message']."<br>";
		sendemail('alex.moore19992507@gmail.com','Contact from website',$body);
	}
?>

<body>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Contact</title>
		<link rel="stylesheet" type="text/css" href="css/pp-contact.css">
	</head>

<?php include "pp-navbar.php"; ?>

	<header id="main-header">
			<h1>Alex Moore - Personal Profile</h1>
		</div>
	</header>

	<header id="header-2">
			<h2>Contact</h2>
		</div>
	</header>

	<section id="main">
			<p id="paras">If you have any queries concerning the content of the 'Alex Moore - Personal Profile' website, or would be interested in contacting me concerning suitable job opportunities, then please don’t hesitate to get in touch.</p>
			<p id="paras">I can be reached either through the contact form, or through my LinkedIn Profile, which can be accessed by simply clicking the LinkedIn Badge below.</p>
			<p id="paras">Thank you for your time browsing the ‘Alex Moore – Personal Profile’ Website. I thoroughly look forward to interacting with you!</p></div></section>

			<form action="./pp-contact.php" class= "my-form" method="">
				<div>
				<label for="name">Name: </label>
				<input type="text" id="name" name="name">
				</div>
				<div>
				<label for="email">Email: </label>
				<input type="text" id="email" name="email">
				</div>
				<div>
				<label for="message">Message: </label>
				<textarea name="message"></textarea>
		         </div>
                <input class = "button" type="submit" value="Submit">
		  </form>
	<?php
	echo '<p>'.$feedback.'</p>';
	?>
		<ul id="users"></ul>


      <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
      <div class="LI-profile-badge"  data-version="v1" data-size="medium" data-locale="en_US" data-type="horizontal" data-theme="dark" data-vanity="alex-moore-73250a193"><a class="LI-simple-link" href='https://uk.linkedin.com/in/alex-moore-73250a193?trk=profile-badge'>Alex Moore</a></div>


		<footer id="main-footer">
			 <hr>
			<p>Copyright &2020; Alex Moore - Personal Profile</p>
	</footer>

	<script src="Javascript/pp-contact.js"></script>

</body>
</html>
