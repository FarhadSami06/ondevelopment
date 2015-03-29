<!DOCTYPE html>
<html lang="en">
<head>
				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title>ON Development Homes</title>
				<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" defer>
				<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto+Condensed|Cinzel+Decorative" defer>
				<link rel="stylesheet" href="css/main.css" defer>
				<link rel="shortcut icon" href="img/onicon.ico" defer/>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" defer></script>
				<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" defer></script>
</head>
<body>
		<div class="container">
		<div class="header">
		<div id="logo">
			<img src="img/onLogo.jpeg" alt="ON Development" class="img-responsive"/>
		</div>
		<div class="navigation navbar-collapse collapse in">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span id="menuBar">Menu</span>
				
			  </button>
			<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav nav-pills nav-justified">
				<li class="active"><a href="index.html">Home</a></li>
				<li><a href="portfolio.html">Portfolio</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="contact.html">Contact</a></li>
				<li><a href="newProjects.html">New Projects</a></li>
			</ul>
			</div>
		</div>	
		</div>
		<?php
 
	if(isset($_POST['email'])) {
 
    $email_to = "farhadsami06@gmail.com";
 
    $email_subject = "Contact us";
 
    function died($error) {
		
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
    // validation expected data exists
 
    if(!isset($_POST['firstName']) ||
 
        !isset($_POST['lastName']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['phone']) ||
 
        !isset($_POST['message'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }

    $first_name = $_POST['firstName']; // required
 
    $last_name = $_POST['lastName']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['phone']; // not required
 
    $comments = $_POST['message']; // required
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";

// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
<h1 id="contactTy">Thank you for contacting us.<br> We will be in touch with you very soon.</h1>
</div>
 
 
<?php
 
}
 
?>
		<div class="footer">		
			<div class="rowFooter">
    			<div class="col-sm-4 glyphicon glyphicon-earphone"> (310)428-3090</div>
				<div class="col-sm-4">ON Development corp &nbsp; &copy; 2015 All Rights Reserved</div>
				<div class="col-sm-4">
				<a href="mailto:nassery@ondevelopmenthomes.com" class="glyphicon glyphicon-envelope"> Email Us</a>
				</div>
			</div>	
		</div>

</body>
</html>
