<?php 
	
	include_once('quiz_functions.php');


	$function = $_REQUEST['function'];
	$page = $_REQUEST['page'];

	switch ($function) {
		case 'maker':
			$url = 'maker/';
			switch ($page) {
				case 'quiz_info':
					$url .= 'quiz_info.php';
					break;
				case 'quiz_admin':
					$url .= 'quiz_admin.php';
					break;
				case 'quiz_users':
					$url .= 'quiz_users.php';
					break;
				default:
					$url = "../home.php";
					break;
			}
			break;
		
		default:
			$url = "home.php";
			break;
	}

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Quiz - FCNAUP</title>
	<!-- Bootstrap -->
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/bootstrap.js"></script>
	<!-- Validation -->
	<script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>

	<script type="text/javascript">

		$(document).ready(function(){
		 
		 $('#contact-form').validate(
		 {
		  rules: {
		    name: {
		      minlength: 2,
		      required: true
		    },
		    email: {
		      required: true,
		      email: true
		    },
		    subject: {
		      minlength: 2,
		      required: true
		    },
		    message: {
		      minlength: 2,
		      required: true
		    }
		  },
		  highlight: function(label) {
		    $(label).closest('.control-group').addClass('error');
		  },
		  success: function(label) {
		    label
		      .text('OK!').addClass('valid')
		      .closest('.control-group').addClass('success');
		  }
		 });
		}); // end document.ready

		$(document).ready(function(){
			$("a#load_form").click(function(){
				$("#form_container").load("maker/quiz_users.form.php");
			});
		});


		
	</script>


	<style type="text/css">	
	    body {
		    padding-top: 60px;
		    padding-bottom: 40px;
	    }
	    /* css para validacao */
	    label.valid {
		  width: 24px;
		  height: 24px;
		  background: url(assets/img/valid.png) center center no-repeat;
		  display: inline-block;
		  text-indent: -9999px;
		}
		label.error {
		  font-weight: bold;
		  color: red;
		  padding: 2px 8px;
		  margin-top: 2px;
		}

	</style>	



</head>
<body>
	<!-- Top Bar -->
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="index.php">Quiz Maker</a>
			</div>
		</div>
	</div>
	
	<div class="container">
		<?php include_once($url); ?>
	</div>
	<!-- Footer -->
	<div class="footer">
		<div class="container">
			<p class="muted credit">
				Developed by Pedro Couto @ 2012
			</p>
		</div>
	</div>
</body>
</html>