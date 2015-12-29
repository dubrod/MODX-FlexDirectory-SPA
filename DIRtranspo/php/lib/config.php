<?php
$mysqli = new mysqli("localhost", "username", "password", "db_table");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} else {

}
?>
