<html>
<head>
	<title>User's Page</title>
</head>
<body>
<table>
<thead>
<tr>
    <th>Username</td>
    <th>First Name</td>
    <th>Last Name</td>
    <th>Email</td>
    <th>Phone</td>
</tr>
</thead>
<?php

$user_name = $_POST["user_name"];
$email_address = $_POST["email_address"];
$phone_number = $_POST["phone_number"];

if (!$user_name && !$email_address && !$phone_number){
	echo "You have not entered valid search parameters";
	exit;
}else{

	$dbc = mysqli_connect('localhost', 'trey', 'poop', 'investment_club_dbs')
	    or die('Could not connect: ' . mysqli_connect_error());

	$query = "SELECT username, name_first, name_last, email_address, phone FROM users WHERE username LIKE '%".$user_name."%' OR email_address LIKE '%".$email_address."%' OR phone like '%".$phone_number."%'";
	$user_info = mysqli_query($dbc, $query);
	if($user_info){

		while($row = mysqli_fetch_array($user_info)){
			echo "
				<tr>
					<td>".$row["username"]."</td>
					<td>".$row["name_first"]."</td>
					<td>".$row["name_last"]."</td>
					<td>".$row["email_address"]."</td>
					<td>".$row["phone"]."</td>
				</tr>";
			}
	} else {
		    echo "
	        <tr>
	        <td colspan='3'>Something went wrong with the query</td>
	        </tr>
	    ";
	}
}
	?>

</table>
</body>
</html>