<!DOCTYPE html>
<html>
<head>
	<title>Activity 1</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<style>
	
	  	body {
	  		font-family: Arial, Helvetica, sans-serif;
	  	}

	
	  	.btn {
	    	background-color: dodgerblue;
	    	color: white;
	    	border: none;
	    	cursor: pointer;
	    	width: 100%;
	    	opacity: 0.9;
	  	}
	  
	  	.btn:hover {
	    	opacity: 1;
	  	}

		img {
	  		display: block;
	  		margin-left: auto;
	  		margin-right: auto;
	  		width:20%
		}

		.bottom {
			position: absolute; bottom: 0px; 
			width: 100vw;
		}

		.link {
			text-align: center !important; 
			text-decoration: none;
		}

		.groups {
			margin-top: -1.7rem;
		}


  	</style>

 

</head>
<body>

	<div class="grid-container w3-padding-64">
		
		<img src="img/fbgroupicon.png" class="center w3-margin-top">

		<div class="w3-container w3-center">
			<h1>Facebook</h1>
			<h1 class="groups">Groups</h1>

			<form method="POST" action="activity3.php" class="w3-container">

				<input class="w3-input w3-border w3-margin-top" type="text" placeholder="Facebook Login" id="username" name="username" required="">

				<input class="w3-input w3-border w3-margin-top" type="password" placeholder="Password" id="password" name="password" required="">

				<button type="submit" class="btn w3-button w3-white w3-border w3-margin-top">Continue</button>

			</form>

		</div>

		<div class="bottom">
			<a href="activity2.php" class="link"><p>Sign Up for Facebook</p></a>
		</div>


	</div>

	
</body>
</html>
