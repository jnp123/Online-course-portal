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

<body>
<legend>Sign-In</legend><br>
<?php ?>
<fieldset>
<img src="images/red.jpg" height='150' width= '650'/>

<form method="POST" action="">

<p>
<label for="email">Email:</label><br>
<input id="email" name="eml" placeholder="Enter Email"><br>
</p>

<p>
<label for="password">Password:</label><br>
<input type="password"  name="pass" placeholder="Enter password"><br>
</p>

<p>
<input type="submit" name="submit" value="Submit">
</p>


<p>
<label for="noaccount">Forget Password?</label>&nbsp;
<input type="submit" name="verify" value="Verify Email">
</p>

<p>
<label for="noaccount">NewUser ?</label>&nbsp;
<a href="Register.inc.php"><input type="submit" name="submit" value="Register"></a>
</p>


</form>
</fieldset>
</body>
</html>



<?php
if(isset($_POST['submit']))
{
	 if(($_POST['eml'])&&($_POST['pass'])) 
   {
	  $email = $_POST['eml'];
	  $password= $_POST['pass'];
	  
	  $con = mysqli_connect("localhost", "user", "user123","project");
	  
	  $query = "SELECT * FROM register WHERE Password ='$password' AND Email='$email' ";
	  $result=mysqli_query($con,$query);

	 // $num = mysqli_num_rows($result);
	 // echo $num;
	  
	 if (mysqli_num_rows($result)>0)
     {
		  while($row = mysqli_fetch_assoc($result))
 
          {
	      $dbEmail=$row['Email'];
		  $dbPassword=$row['Password'];
	  
	    if(($email==$dbEmail) && ($password==$dbPassword))
		{
         echo "Successfully Logged into online course portal. Start Browsing......!!!!!!!";
		}
		else{
			echo "Email or Password is not valid";
		}
	  }
	 }
    
    else
	{
         echo "Successfully Logged In! welcome:".$email;
    }

	//header("Location:index.php");
   
   mysqli_close($con);
   }
}

?>




