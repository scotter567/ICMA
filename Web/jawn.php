<?php
include '../helpers.php';

$query = "SELECT username, name_first, name_last, email_address, phone, dob FROM users";
$result = mysqli_query($dbc,$query) or die('Query failed: ' . mysqli_error($dbc));

//mysqli_select_db('investment_club_dbs') or die('Could not select database');

// Performing SQL query


// Printing results in HTML
echo "<table>\n";
while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Free resultset
mysqli_free_result($result);

// Closing connection
mysqli_close($dbc);
?>