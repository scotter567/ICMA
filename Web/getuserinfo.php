<?php
include '../helpers.php';

$query = "SELECT username, name_first, name_last, email_address, phone, dob FROM users";
$response = @mysqli_query($dbc, $query);

if($response){
	
	echo '<table align= "left"
	cellspacing = "5" cellpadding= "8">
	
	<tr><td align = "left"><b>First Name </b></td>
	<td align = "left"><b>Last Name</b></td>
	<td align = "left"><b>Username</b></td>
	<td align = "left"><b>Email</b></td>
	<td align = "left"><b>Phone</b></td>
	<td align = "left"><b>Birth Day</b></td></tr>';
	
	while ($row = mysqli_fetch_array($response)){
		
		echo'<tr><td align=left>' . 
		$row['name_first'] . '</td><td align="left">' .
		$row['name_last'] . '</td><td align="left">' .
		$row['username'] . '</td><td align="left">' .
		$row['email_address'] . '</td><td align="left">' .
		$row['phone'] . '</td><td align="left">' .
		$row['dob'] . '</td><td align="left">' ;
		
		echo '</tr>';
	}
echo '</table>';
}else {
	echo "Couldnt Issue database query";
	
	echo mysqli_error($dbc);
	
}

mysqli_close($dbc);
?>