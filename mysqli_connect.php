<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'trey');
define('DB_PASSWORD', 'poop');
define('DB_NAME', 'investment_club_dbs');

$dbc = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME)
    or die('Could not connect: ' . mysqli_error());

?>