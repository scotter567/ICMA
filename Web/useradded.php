<html>
<head>
<title> Add User </title>
</head>
<body>
<?php
include '../helpers.php';

if(isset($_POST['submit'])){
	
	$data_missing = array();
	
	if(empty($_POST['name_first'])){
		$data_miss[] = 'First Name';
	} 
	else{
		$f_name = trim($POST['name_first']);
	}
		
	if(empty($_POST['name_last'])){
		$data_miss[] = 'Last Name';
	} 
	else{
		$l_name = trim($POST['last_name']);
	}
		
	if(empty($_POST['email'])){
		$data_miss[] = 'Email';
	} 
	else{
		$email= trim($POST['email']);
	}
	
	if(empty($_POST['username'])){
		$data_miss[] = 'Username';
	} 
	else{
		$username = trim($POST['username']);
	}
	
	if(empty($_POST['password_str'])){
		$data_miss[] = 'Password';
	} 
	else{
		$username = trim($POST['password_str']);
	}
		
	if(empty($_POST['dob'])){
		$data_miss[] = 'Date of Birth';
	} 
	else{
		$b_date = trim($POST['dob']);
	}
			
	if(empty($_POST['phone'])){
		$data_miss[] = 'Phone';
	} 
	else{
		$phone = trim($POST['phone']);
	}
	
		

	
	if(empty($data_missing)){
		//require_once(../mysqli_connect.php);
		
		$query = "INSERT INTO user (username, name_first, name_last, password_str, email_address, phone, dob)VALUES (?, ?, ?, ?, ?, ?, ?)";
		
		$stmt = mysqli($dbc, $query);
		
		mysqli_stmt_bind_param($stmt,"sssssss", $username,$name_first, $name_last, $password_str, $email, $phone, $b_date);
		
		mysqli_stmt_execute($stmt);
		 
        $affected_rows = mysqli_stmt_affected_rows($stmt);

        if($affected_rows == 1){
            echo 'Student Entered';
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
			
        } else {
			
            echo 'Error Occurred<br />';

            echo mysqli_error();
            mysqli_stmt_close($stmt);
			
            mysqli_close($dbc);
        }
	
	}else {
		echo 'You need to enter the following data <br/>';
		
		foreach($data_missing as $missing){
			echo "$missing<br/>";
		}
	}
	
}

?>

<form action="http://localhost/useradded.php" method=post>
	
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
	<input type = "text" name = "us_name" size = "30" value = ""/> 
	</p>
	
	<p> Password:
	<input type = "text" name = "password_str" size = "30" value =""/>
	</p>
	
	<p> Birth Date (YYYY-MM-DD):
	<input type = "text" name = "dob" size = "30" value = ""/> 
	</p>
	
	<p>
		<input type = "submit" name = submit value = "Send"/>
	</p>
	
</form>
</body>
</html>