<?php

require("./models/User.php");

$con = new User();

$users = $con->getUsers();

require('./views/users.php');

