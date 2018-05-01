<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'user_web');
define('DB_PASSWORD', 'jawnskie2');
define('DB_NAME', 'investment_club_dbs');

$dbc = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME)
    or die('Could not connect: ' . mysqli_error());

?>