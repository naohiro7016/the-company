<?php
include "..//classes/User.php";

//Create an object
$user = new User();

//Calling the method
$user->update($_POST,$_FILES);
?>