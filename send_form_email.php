<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>ICEBU|Track Details</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <link href="assets/css/carousel.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/slider.css" rel="stylesheet"><link rel="stylesheet" href="assets/css/w3.css">
    <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <img class="size" src="assets/img/banner-website.jpg" class="centerlogo">
      </div>
      <div class="navbar-wrapper">
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html">Home</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.html#track">Tracks</a></li>
                <li><a href="dates.html">Important Dates</a></li>
                <li><a href="committee.html">Committee</a></li>
                <li><a href="register.html">Register</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <br>
      <div class="col-md-4 btnSize">
                <div class="row">
                  <div class="col-md-12">
                    <div class="dateClass">
                      <h4 class="marginZero importantDate">IMPORTANT DATES</h4>
                      <p class="color pStyle"><i class="fa fa-arrow-circle-right"></i><span class="spanClass">CALL FOR ABSRATCT : <span class="bold">30th March</span><span></p>
                <p class="color pStyle"><i class="fa fa-arrow-circle-right"></i><span class="spanClass">LAST DATE FOR ABSTRACT SUBMISSION : <span class="bold blink">30th May</span></span></p>
                <p class="color pStyle"><i class="fa fa-arrow-circle-right"></i><span class="spanClass">CONFIRMATION AND ACCEPTANCE OF ABSTRACTS : <span class="bold">10th June</span></span></p>
                <p class="color pStyle"><i class="fa fa-arrow-circle-right"></i><span class="spanClass">LAST DATE OF SUBMISSION OF FULL LENGTH PAPER : <span class="bold blink">30th July</span></span></p>
                    </div>
                  </div>
                  <div class="col-md-12 topMarginList">
                    <a href="register.html"><li class="listStyle btn btn-default"><i class="fa fa-external-link"></i>Registration</li></a><br>
					<a href="tutorial.html"><li class="listStyle btn btn-default"><i class="fa fa-external-link"></i>Tutotrial</li></a><br>
					<a href="paper_submission.html"><li class="listStyle btn btn-default"><i class="fa fa-external-link"></i>Paper Submission</li></a><br>
					<a href="committee.html"><li class="listStyle btn btn-default"><i class="fa fa-external-link"></i>Committee</li></a><br>
					<a href="tour.html"><li class="listStyle btn btn-default"><i class="fa fa-external-link"></i>Tour</li></a><br>
					<a href="sponsors.html"><li class="listStyle btn btn-default"><i class="fa fa-external-link"></i>Sponsors</li></a><br>
					<a href="downloads.html"><li class="listStyle btn btn-default"><i class="fa fa-external-link"></i>Downloads</li></a><br>
					<a href="visa.html"><li class="listStyle btn btn-default"><i class="fa fa-external-link"></i>Visa Information</li></a><br>
					<a href="map.html"><li class="listStyle btn btn-default"><i class="fa fa-external-link"></i>Venue with map</li></a>
                  </div>
                </div>
      </div>
    <div class="col-md-8">
      <!-- Main component for a primary marketing message or call to action -->
      
		<?php
 
		if(isset($_POST['email'])) {
		 
			$email_to = "icebu2016@jmi.ac.in";
		 
			$email_subject = "Your email subject line";
		 
			function died($error) {
				echo "We are very sorry, but there were error(s) found with the form you submitted. ";
				echo "These errors appear below.<br /><br />"; 
				echo $error."<br /><br />"; 
				echo "Please go back and fix these errors.<br /><br />"; 
				die(); 
			}
		 
			if(!isset($_POST['first_name']) ||
		 
				!isset($_POST['last_name']) ||
		 
				!isset($_POST['email']) ||
		 
				!isset($_POST['telephone']) ||
		 
				!isset($_POST['comments'])) {
		 
				died('We are sorry, but there appears to be a problem with the form you submitted.');       
		 
			}
		 
			 
		 
			$first_name = $_POST['first_name']; 
		 
			$last_name = $_POST['last_name']; 
		 
			$email_from = $_POST['email']; 
		 
			$telephone = $_POST['telephone']; 
		 
			$comments = $_POST['comments']; 
			 
		 
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
			 
			$headers = 'From: '.$email_from."\r\n".
			 
			'Reply-To: '.$email_from."\r\n" .
			 
			'X-Mailer: PHP/' . phpversion();
			 
			@mail($email_to, $email_subject, $email_message, $headers);  
			 
		?>
		 
		Thank you for contacting us. We will be in touch with you very soon.
		 
		<?php
		 
		}
		 
		?>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery.min.js"><\/script>')</script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <script>
      $('.blink').each(function() {
          var elem = $(this);
          setInterval(function() {
              if (elem.css('visibility') == 'hidden') {
                  elem.css('visibility', 'visible');
              } else {
                  elem.css('visibility', 'hidden');
              }    
          }, 100);
      });
    </script>
  </body>
</html>
