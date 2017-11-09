<html>
<head>
<title>php</title>
</head>

<body>
<?php
if(isset($_POST["submit"]))
{
	$username=$_POST["username"];
	$password=$_POST["password"];
	if($username=="user"&&$password=="user")
	{
		echo "<h3>welcome:{$_POST["username"]}</h3>";
	}
	else
	{
		echo "<h3>Account does not exist</h3>";
	}
}
else
{
	echo "<h3>LOGIN REQUIRED</h3>";
}
?>
</body>

</html>