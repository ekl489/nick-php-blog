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


    $post1 = new Post(1, "My day at the dog park", "I had a lovely day at the dog park...", "Nick Ramsay");
    $post2 = new Post(2, "Day in the life of a journalist", "I love being a journalist, its what I've always wanted to be...", "Andrew Klein");
    $post3 = new Post(3, "Learning Latin for the first time in my life", "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.", "Jonathan Peacock");

    $posts = array($post1, $post2, $post3);

?>