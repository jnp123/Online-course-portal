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

