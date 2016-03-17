<?php 
        define('dbhost','localhost');
	define('dbuser','devinluker');
	define('dbpass','Samantha2');
	define('dbname','portfolioback');
	
	
	
	//connect to db
	 $db = mysql_connect(dbhost,dbuser,dbpass); 
	 if (!$db) {
	 die("Database connection failed miserably: " . mysql_error());
	 }
 
 	//set up select
  	$db_select = mysql_select_db(dbname,$db);
 	if (!$db_select) {
 	die("Database selection also failed miserably: " . mysql_error());
 	}
	 
	 $fname =$_POST['fname'];
	 $lname =$_POST['lname'];
	 $email =$_POST['email'];
	 $note=$_POST['note'];
	 
	 $sendsql = "INSERT INTO inquiries (firstName,lastName,email,note) 
	 VALUES ('$fname','$lname','$email','$note')";
	 
	 if(!mysql_query($sendsql))
	 {
		 die('Error: ' . mysql_error());
	 }
	 
	 mysql_close();
?>

<!doctype html>
<?php

 
?>
<html>
	<head>
		<title>Submitted</title>	
		
		<meta name="description" content="Devin Lukers Portfolio. Leabnon, Ohio. Charlotte North Carolina.	"/>
		
		<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.10/themes/ui-lightness/jquery-ui.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		
		<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.10/jquery-ui.min.js"></script>		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>        
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="content/style.css" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">		
	<body>
		<h1>Your Information Has Been Submitted, I will Do My Best To Contact You Soon!</br>Thanks!</h1>
		<a href="index.html"><h2>Return to my web page</h2></a>	        
		
	</body>
</html>