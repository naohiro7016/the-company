<?php

include "../classes/User.php";

//Create object based on the User class
$user = new User();

//Calling the method

$user->login($_POST);

?>