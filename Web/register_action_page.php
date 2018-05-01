<?php

$username = $_POST["username"];
$f_name = $_POST["name_first"];
$l_name = $_POST["name_last"];
$passwrd = $_POST["password_str"];
$email = $_POST["email_address"];
$phone = $_POST["phone"];
$dob = $_POST["dob"];
$acc_val = $_POST["account_value"];


$dbc = mysqli_connect('localhost', 'trey', 'poop', 'investment_club_dbs')
    or die('Could not connect: ' . mysqli_connect_error());
	
$query = "INSERT INTO users (username, name_first, name_last, password_str, email_address, phone, dob, account_value)
									VALUES ('$username', '$f_name', '$l_name', '$passwrd', '$email', '$phone', '$dob', '$acc_val')";
									

if (mysqli_query($dbc, $query)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($dbc);
}

mysqli_close($dbc);

?>