<!DOCTYPE html>
<html>
<head>
	<title>Activity 2</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
	
	  	body {
	  		font-family: Arial, Helvetica, sans-serif;
	  	}

	
	  	.btn {
	    	color: red;
	    	border: none;
	    	cursor: pointer;
	    	width: 100%;
	  	}
	  
	  	.btn:hover {
	    	opacity: 1;
	  	}

		img {
	  		display: block;
	  		margin-left: auto;
	  		margin-right: auto;
	  		width: 4rem;
	  		height: 4rem;
		}

		.bottom {
			position: absolute; bottom: 0px; 
			width: 100vw;
		}

		.link {
			text-align: center !important; 
			text-decoration: none;
		}

		.input-icon {
		  	position: absolute;
		  	left: 20px;
		  	top: calc(50% - 0.5em);

		}

		input {
			padding-left: 70px;
		}
		
		.input-wrapper{
			position: relative;
		}

		input[type=text] {
		    padding-left: 40px; 
		}

		input[type=email] {
		    padding-left: 40px; 
		}

		input[type=password] {
		    padding-left: 40px; 
		}

  	</style>

 

</head>
<body class="w3-highway-blue">

	<div class="grid-container w3-padding-32">
		
		<div class="w3-container w3-center">
			<h1>Sign Up</h1>

			<h5 class="w3-text-blue w3-large">WHO YOU ARE?</h5>

			<div class="w3-row w3-margin-top">

			  <div class="w3-col s4">
			  	<img class="w3-circle" src="img/parent.jpg">
			  	<p class="w3-text-yellow w3-medium">PARENT</p>
			  </div>

			  <div class="w3-col s4">
			    <img class="w3-circle" src="img/child.jpg">
			    <p class="w3-text-orange w3-medium">CHILD</p>
			  </div>

			  <div class="w3-col s4">
			    <img class="w3-circle" src="img/teacher.jpg">
			    <p class="w3-text-blue w3-medium">TEACHER</p>
			  </div>

			</div>


			<form method="POST" action="activity3.php" class="w3-container">


				<div class="input-wrapper">
					<label class="fa fa-user input-icon w3-text-gray"></label>
					<input class="w3-input w3-border w3-margin-top w3-round-xxlarge w3-highway-blue" type="text" placeholder="Username" id="username" name="username" required="">
				</div>

				<div class="input-wrapper">
					<label class="fa fa-envelope input-icon w3-text-gray"></label>
					<input class="w3-input w3-border w3-margin-top w3-round-xxlarge w3-highway-blue" type="text" placeholder="Email" id="email" name="email" required="">
				</div>


				<div class="input-wrapper">
					<label class="fa fa-lock input-icon w3-text-gray"></label>
					<input class="w3-input w3-border w3-margin-top w3-round-xxlarge w3-highway-blue" type="password" placeholder="Password" id="password" name="password" required="">
				</div>


				<div class="input-wrapper">
					<label class="fa fa-lock input-icon w3-text-gray"></label>
					<input class="w3-input w3-border w3-margin-top w3-round-xxlarge w3-highway-blue" type="password" placeholder="Confirm Password" id="confirmpassword" name="confirmpassword" required="">
				</div>



				<button type="submit" class="w3-block w3-button w3-margin-top w3-red w3-round-xxlarge">SIGNUP</button>

			</form>

		</div>

		<div class="bottom">
			<i><p class="link">Already have an account. <a class="link w3-text-orange" href="activity2.php">Login here</a></p></i>
		</div>


	</div>

	
</body>
</html>
