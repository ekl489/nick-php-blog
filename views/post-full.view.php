<?php 
    if(!isset($myPost)){
        require_once 'controllers/page-not-found.controller.php';
        exit;
    }
?>

<div>
    <span class="h1"><?php echo $myPost->title ?></span> 
    
    <span class="h4 text-muted">- <?php echo $myPost->author ?></span>

    <p> 
        <?php echo $myPost->body ?>
    </p>
</div>
