<?php
include '../helpers.php';

session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM users where username = '$username'";
//echo $query;
$result = @mysqli_query($dbc, $query);

if ( $result->num_rows == 0){ // User doesn't exist
    $_SESSION['message'] = "User with that username doesn't exist!";
    header("location: error.php");
}
else { // User exists
    $user = $result->fetch_assoc();

    if ( $_POST['psw'] === $user['password_str']){
        
        $_SESSION['email'] = $user['email_address'];
        $_SESSION['first_name'] = $user['name_first'];
        $_SESSION['last_name'] = $user['name_last'];
        $_SESSION['active'] = $user['active'];
		$_SESSION['phone'] = $user['phone'];
		$_SESSION['dob'] = $user['dob'];
        $_SESSION['user_id'] = $user['user_id'];
		
        $_SESSION['logged_in'] = true;
		$_SESSION['message'] = 'User Successfully logged in';
		echo 'is you with me?';
		echo $result->num_rows;
		header("location: profile.php");
    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: error.php");
    }
}

mysqli_close($dbc);
?>