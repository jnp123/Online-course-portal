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

<form method="POST" action="">

<p>
<label for="email">Email:</label>&nbsp;
<input id="email" name="email" placeholder="email/username"><br>
</p>

<p>
<label for="password">Password:</label>&nbsp&nbsp;
<input type="password"  name="pass" placeholder="password"><br>
</p>

<p>
<input type="submit" name="submit" value="Submit">
</p>


<p>
<label for="noaccount">Forget Password?</label>&nbsp;
<input type="text" name="verify" value="Verify Email">
</p>

<p>
<label for="noaccount">NewUser ?</label>&nbsp;
<input type="submit" name="submit" value="Register">
</p>


</form>
</fieldset>
</body>
</html>



<?php
if(isset($_POST['submit']))
{
	SignIn();
}


 function SignIn()
 {
   if(($_POST['email'])&& ($_POST['password'])) 
   {
	  $Email = $_POST['email'];
	  $Password = $_POST['password'];
	  
	  $con = mysqli_connect("localhost", "user", "user123","project");
	  $query ="SELECT Email,Password FROM register where Email = '$Email' AND Password = '$Password'";
	  $result=mysqli_query($con,$query);
	
	
	
	
    if (mysqli_num_rows($result)>0)
    {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) 
	  {
		  $dbEmail=$row['Email'];
		  $dbPassword=$row['Password'];
	  }
	    if(($Email==$dbEmail) && ($Password==$dbPassword))
		{
         echo "Successfully Logged into online course portal";
		}
		else
	    {
		 echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
	    }
		
      
    } 
    else 
	{
         echo "NO database connected";
    }

	
   
   mysqli_close($con);
   }
  }



?>




