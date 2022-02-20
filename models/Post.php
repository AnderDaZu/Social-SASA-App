<?php

class Post {

    public function getPostsUser($id)
    {
        $posts = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/posts'), true);
        $userPosts = [];
        $i = 0;
        foreach ($posts as $post) {
            if ( $post['userId'] == $id ) {
                $userPosts[$i] = $post;
                $i++;
            }
        }
        return $userPosts;
    }

    public function getPost($id)
    {
        $post = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/posts/'.$id), true);
        return $post;
    }

    public function getPostComments($id)
    {
        $comments = json_decode(file_get_contents("https://jsonplaceholder.typicode.com/comments"), true);
        $postComments = [];
        $i = 0;
        foreach ($comments as $comment) {
            if ( $comment['postId'] == $id ) {
                $postComments[$i] = $comment;
                $i++;
            }
        }
        return $postComments;
    }

}