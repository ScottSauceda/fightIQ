<?php

$conn = mysqli_connect("localhost", "root", "mysql") or die ("Could not connect to server.");

mysqli_select_db($conn, "fight_iq") or die ("Could not connect to FightIQ databse.");

?>