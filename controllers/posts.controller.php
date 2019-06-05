<?php

    // show navbar
    require_once 'views/nav.view.php';

    // get posts list from mock db
    require_once 'models/posts.model.php';

    // get path
    //$path = substr($_SERVER['REQUEST_URI'], 7);

    $id = is_numeric($path[count($path) - 1]) ? $path[count($path) - 1] : '';

    // check if there is an id, if not then just show all posts.
    if ($id != ''){

        // find the right post
        $myPost = '';
        foreach($posts as &$post){
            if($post->id == $id){
                $myPost = $post;
            }
        }
        if($myPost == ''){
            // show error, no post found
            require_once 'controllers/page-not-found.controller.php';
            exit;
        } 

        include_once 'views/post-full.view.php';
    } else {
        include_once 'views/post-list.view.php';
    }

?>