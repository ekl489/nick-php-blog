# Nick's PHP Blog
> Created by Nicholas Ramsay

This project uses PHP with an MVC pattern and is styled with Bootstrap.

I started this project with the intention of expanding my PHP knowledge from years ago by applying my back-end skills mostly from Node.js development(reason for MVC pattern).

Currently, there is no db connection, however there is a mock retrieval system for '$posts'. I have done work with databases in PHP and as a result I didn't feel the need to practice it.
        
This project uses proper routing (e.g. '/', '/posts', '/posts/1', ...) which I am not used to in PHP. Therefore, although simple, I am proud of this project, a lot has been learnt.

## Observations
* It is very easy to create ugly PHP code
* Is there a better way of echoing large html blocks without making the code messy. e.g. extract from views/post-list/view.php
```php
echo '<div class="card"><div class="card-body"><h5 class="card-title">'
                 . $post->title // show the title in card-title
                 . '</h5><p class="card-text">'
                 . substr($post->body, 0, 35) . '...' // show a short extract of post body
                 . '</p><a class="card-link" href="/posts/'
                 . $post->id // add the correct link to the button
                 . '">Read</a></div></div><br>';
```
