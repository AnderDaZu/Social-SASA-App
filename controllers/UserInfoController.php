<?php

require("./models/User.php");
require("./models/Post.php");

$connUser = new User();
$connPosts = new Post();

$id = $_GET['id'];

$user = $connUser->getUser($id);
$userPosts = $connPosts->getPostsUser($id);

require('./views/user.php');
