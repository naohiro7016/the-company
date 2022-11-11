<?php
include "../classes/User.php";

//Create and object based on the User class
$user = new User();

//Calling the method
$user->logout($_POST);
?>