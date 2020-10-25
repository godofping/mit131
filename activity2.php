<!DOCTYPE html>
<html>
<head>
	<title>Activity 1</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<style>
		* {
			box-sizing: border-box;
		}

	  	body {
	  		font-family: Arial, Helvetica, sans-serif;
	  	}

	  
	  	.input-container {
	    	display: -ms-flexbox; /* IE10 */
	    	display: flex;
	    	width: 100%;
	    	margin-bottom: 15px;
		}


	  
		.icon {
	    	padding: 10px;
	    	background: dodgerblue;
	    	color: white;
	    	min-width: 50px;
	    	text-align: center;
	  	}
	  
	  	.input-field {
	    	width: 100%;
	    	padding: 10px;
	    	outline: none;
	  	}
	  
	  	.input-field:focus {
	    	border: 2px solid dodgerblue;
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
			.grid-container {
	  		display: grid;
	  		grid-template-columns: auto auto auto;
	  		grid-gap: 10px;
	  		background-color: ;
	  		padding: 10px;
		}

		.grid-container > div {
	  		background-color: rgba(255, 255, 255, 0.8);
	  		border: 1px ;
	  		text-align: center;
	  		font-size: 30px;
		}

  	</style>

 

</head>
<body>

	<div class="grid-container w3-padding-64">
		
		<img src="img/fbgroupicon.png" class="center w3-margin-top " style="width:20%">

			<div class="w3-container w3-center">
			<h1>Facebook</h1>
			<h1 style="margin-top: -1.7rem;">Groups</h1>

			<form method="POST" action="activity3.php" class="w3-container">


			<input class="w3-input w3-border w3-margin-top" type="text" placeholder="Facebook Login" id="username" name="username" required="">

			<input class="w3-input w3-border w3-margin-top" type="password" placeholder="Password" id="password" name="password" required="">

			<button type="submit" class="btn w3-button w3-white w3-border w3-margin-top">Continue</button>

			</form>

		</div>

		<div style="position: absolute; bottom: 0px; width: 100vw;">
			<a href="activity2.php" class="link" style="text-align: center !important; text-decoration: none;"><p>Sign Up for Facebook</p></a>
		</div>


	</div>

	
</body>
</html>
