<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
	$username = $_SESSION['username'];
	$phone = $_SESSION['phone'];
	$dob = $_SESSION['dob'];
	$user_id = (int) $_SESSION['user_id'];
    $active = $_SESSION['active'];
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Account Page </title>
  <?php include 'css/css.html'; ?>
</head>

<body>
  <div class="form">

          <h1>Welcome <?php echo $first_name.' '.$last_name; ?></h1>
          <hr>
		                      
          <h2>Investments</h2>
		  <?php
		  include '../helpers.php';
			
			$query = "SELECT * FROM investments WHERE user_id = $user_id";
			$result = mysqli_query($dbc,$query) or die('Query failed: ' . mysqli_error($dbc));
			
			echo "<table>\n";
			while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			echo "\t<tr>\n";
			foreach ($line as $col_value) {
				echo "\t\t<td>$col_value</td>\n";
			}
			echo "\t</tr>\n";
}
echo "</table>\n";
		  ?>
		  
		  
          
          <a href="IC_Login.html"><button class="button button-block" name="logout"/>Log Out</button></a>
		  <a href="IC_Investment.html"><button class="button button-block" name="add_invest"/>Add Investment</button></a>

    </div>
    
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
