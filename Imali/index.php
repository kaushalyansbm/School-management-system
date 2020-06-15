<!DOCTYPE html>
<html>
<head>

	<title>Home</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <link rel="stylesheet" type="text/css" href="./CSS/main.css">
</head>
<body>
	<?php
	session_start();
      if (isset($_GET['LoginO'])) {
      ?><script type="text/javascript">
      	alert("login failed");
      </script>
     <?php }
	?>
				 <nav class="navbar navbar-fixed-top" style="background-color:WHITE;-webkit-box-shadow: 3px 3px 13px -1px rgba(54,51,54,1);
-moz-box-shadow: 3px 3px 13px -1px rgba(54,51,54,1);
box-shadow: 3px 3px 13px -1px rgba(54,51,54,1);">
				        <div class="container-fluid">
				        	 <a class="navbar-brand" href="http://localhost/imali/">
  							<img src="./Resource/LOGO.JPG" style="display: inline-block;height: 30px;">
  							
						    </a>

				            <!-- Logo -->
				            <div class="navbar-header">
				                <a href="http://localhost/imali/" class="navbar-brand">TAXILA CENTRAL COLLAGE</a>
				            </div>

				           
				        </div>
                   </nav>
                   <div class="container-fluid lg">
                   	<div class="row" style="height: 30vh;"></div>
                   	<div class="row">
                   		<div class="col-md-3"></div>
                   		<div class="col-md-6">
                   			 <div class="w3-card-4" style="background-color: white;opacity: 0.6;">

									<div class="w3-container w3-blue">
									  <h2>Login</h2>
									</div>

									<form class="w3-container" method="post" action="./Controller/LoginControler.php">

									<label>National Identity card number</label>
									<input class="w3-input" type="text" name="userid">

									<label>User Password</label>
									<input name="userpassword"class="w3-input" type="text">
									<br>
									;<button type="submit"class="w3-btn w3-blue">Login</button>
                                    <br>
									</form>
									<br>

									</div> 
                  		</div>
                   		<div class="col-md-3"></div>
                   	</div>
                   	<div class="row"></div>
                   </div>
	
</body>
</html>