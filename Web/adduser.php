<html>
<head>
<title> Add Student </title>
</head>
<body>

<form action="http://localhost/useradded.php" method="post" required>

	<b>Add a New Student</b>

	<p> First Name:
	<input type = "text" name = "name_first" size = "30" value = ""/> 
	</p>
	
	<p> Last Name:
	<input type = "text" name = "name_last" size = "30" value = ""/> 
	</p>
	
	<p> Email:
	<input type = "text" name = "email" size = "30" value = ""/> 
	</p>
	
	<p> Username:
	<input type = "text" name = "username" size = "30" value = ""/> 
	</p>
	
	<p> Password:
	<input type = "text" name = "password_str" size = "30" value =""/>
	</p>
	
	 <p> Birth Date (YYYY-MM-DD):
	<input type = "text" name = "dob" size = "10" value = ""/> 
	</p>
	
	<p> Phone Number:
	<input type = "text" name = "phone" size = "12" value = ""/> 
	</p>
	
	<p>
		<input type = "submit" name = "submit" value = "Send"/>
	</p>
	
</form>

</body>
</html>