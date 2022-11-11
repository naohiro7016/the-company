<?php

include "../classes/User.php";

//Creating Object based on the User class
$user = new User();

//Calling the method
$user->store($_POST);

?>