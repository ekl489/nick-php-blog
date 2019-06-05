<?php

    /*
        - currently we just have a mock db
        - we will jsut pretend we are retrieving posts from a db.
    */

    class Post{

        public function __construct($id, $title, $body, $author) {
            $this->id = $id;
            $this->title = $title;
            $this->body = $body;
            $this->author = $author;
        }

        public $id;
        public $title = '';
        public $body = '';
        public $author = '';
    }

    $posts = array(new Post(1, "My day at the dog park", "I had a lovely day at the dog park...", "Nick Ramsay"), 
                   new Post(2, "Day in the life of a journalist", "I love being a journalist, its what I've always wanted to be...", "Andrew Klein"), 
                   new Post(3, "Learning Latin for the first time in my life", "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.", "Jonathan Peacock"),
                   new Post(4, "What is the essence of life?", "That is a question I have always wanted to know the answer to. But maybe, just maybe, we aren't meant to know...", "Nick Ramsay"),
                   new Post(5, "Learn git concepts, not commands", "So, you want to use git right? But you don't just want to learn commands, you want to understand what you're using? Then this is meant for you! Let's get started...", "Nico Riedmann"),
                   new Post(6, "I Tried the Top 5 Coding Challenge Websites", "I did a quick look over all of these sites and am providing my immediate impressions from them. It's very possible they might be missing something. :) If a correction needs to be made, or if there's another really awesome thing about any of these sites that I missed, just drop a comment and I can update this post.", "Ashely Boyer")
                );

?>