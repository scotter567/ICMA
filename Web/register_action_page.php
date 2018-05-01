<?php
//placeholders for variables
import (../helpers.php);

$username = $_POST["username"];
$f_name = $_POST["name_first"];
$l_name = $_POST["name_last"];
$passwrd = $_POST["password_str"];
$email = $_POST["email_address"];
$phone = $_POST["phone"];
$dob = $_POST["dob"];
$acc_val = $_POST["account_value"];

$query = "INSERT INTO user ($username, $name_first, $name_last, $password_str, $email_address, $phone, $dob, $account_value)
									VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$result = $dbc->query($query);

if ($dbc-->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$dbc->close();
?>