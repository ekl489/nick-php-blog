<div>
    <h1>Posts</h1>

    <?php

        foreach ($posts as &$post) {
            // show each post title in $posts in a nice bootstrap card, put them in anchor tag with link to their $id
            echo '<div class="card"><div class="card-body"><h5 class="card-title">'
                 . $post->title // show the title in card-title
                 . '</h5><p class="card-text">'
                 . substr($post->body, 0, 35) . '...' // show a short extract of post body
                 . '</p><a class="card-link" href="/posts/'
                 . $post->id // add the correct link to the button
                 . '">Read</a></div></div><br>';
        }
    ?>
    
</div>
