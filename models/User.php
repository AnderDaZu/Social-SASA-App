<?php

class User {

    public function getUsers()
    {
        $users = json_decode(file_get_contents("https://jsonplaceholder.typicode.com/users"), true);
        return $users;
    }

    public function getUser($id)
    {
        $user = json_decode(file_get_contents("https://jsonplaceholder.typicode.com/users/".$id), true);
        return $user;
    }

}