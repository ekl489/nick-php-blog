<?php

    // show navbar
    require_once 'views/nav.view.php';

    // get posts list from mock db
    require_once 'models/posts.model.php';

    if($path[count($path) - 1] == 'posts'){
        include_once 'views/post-list.view.php';
    } else if(is_numeric($path[count($path) - 1])){
        // looking for a single post
        // find the right post
        $id = $path[count($path) - 1];
        $myPost = '';

        foreach($posts as &$post){
            if($post->id == $id){
                $myPost = $post;
            }
        }
        if($myPost == ''){
            // show error, no post found
            include_once 'controllers/page-not-found.controller.php';
            exit;
        } 
        // post has been found! show it
        include_once 'views/post-full.view.php';
    } else {
        // incorrect route -> show error
        include_once 'controllers/page-not-found.controller.php';
    }
?>