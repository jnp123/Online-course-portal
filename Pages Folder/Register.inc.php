<html>
<head>

<title>form</title>

<style type="text/css">
h1{color:red;}
p{color:blue;} 
term {
    background: transparent;
    border: none;
  }
</style>

</head>

<body  bgcolor="blue">
<legend>Register</legend><br>
<fieldset>
<img src="images/red.jpg" height='150' width= '650'/>

<form method="POST" action="form1.inc.php">


<p>
<label for="email">Email:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="email" name="Email" placeholder="Enter email id"><br>
</p>

<p>
<label for="firstname">Firstname:</label>
<input type="text" name="Firstname" placeholder="Enter firstname">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<label for="lastname">Lastname:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="Lastame" placeholder="Enter lastname"><br>
</p>


<p>
<label for="password">Password:</label>
<input type="password" name="Password" placeholder="Enter password">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<label for="password">Confirm Password:</label>
<input type="password" name="ConfirmPassword" placeholder="Retype password"><br>
</p>


<p>
<label for="mobile">Mobile:</label>&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="mobile" name="Mobile" placeholder="Mobile number"><br>
</p>

<p>
<label for="noaccount">Create an account-></label>
<input type="submit" name="submit" value="Register">



</form>

</fieldset>
</body>
</html>

<?php
	//Establishing Connection with Server
	$connection = mysqli_connect("localhost", "user", "user123","project");

	if(isset($_POST["submit"]))
{
   
	//Fetching variables of the form which travels in URL
    
    $Email = $_POST["Email"];
    $Firstname = $_POST["Firstname"];
    $Lastame = $_POST["Lastame"];
	$password = $_POST["Password"];
    $ConfirmPassword = $_POST["ConfirmPassword"];
    $Mobile = $_POST["Mobile"];
    
	
	if($Email!=""&&$Mobile!="")
	{		
	
	
	//Insert Query of SQL
   
	
	 $sql = "INSERT INTO register VALUES ('$Email', '$Firstname', '$Lastame', '$password', '$ConfirmPassword', '$Mobile')";
   
	
	 if (mysqli_query($connection, $sql))
	 {
     echo "<br/><br/><span>Data Inserted successfully...!!</span>";;
     } 
	 else 
	 {
     echo "Error: " . $sql . "<br>" . mysqli_error($connection);
     }
	}
 }

	//Closing Connection with Server
	mysqli_close($connection);
?>
