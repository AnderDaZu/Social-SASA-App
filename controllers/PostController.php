<?php

require("./models/Post.php");
require("./models/User.php");

$connPost = new Post();
$connUser = new User();

$id = $_GET['id'];

$post = $connPost->getPost($id);
$comments = $connPost->getPostComments($id);
$user = $connUser->getUser($post['userId']);

require('./views/postsCommets.php');