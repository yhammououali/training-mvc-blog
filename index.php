<?php
    require_once 'database.php';
    require_once 'post.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Blog MVC Miage</title>
        <link rel="stylesheet" href="./assets/vendor/bootstrap-grid.min.css">
        <link rel="stylesheet" href="./assets/vendor/bootstrap.min.css">
    </head>

    <body>
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Custom jumbotron</h1>
                <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
                <button class="btn btn-primary btn-lg" type="button">Example button</button>

                <?php
                    $post = new Post();
                    var_dump($post->getPost(1));
                    $posts = $post->getPosts()->fetchAll();
                    
                    foreach ($posts as $post) {
                        echo $post['title'];
                        $date = new \DateTime($post['createdAt']);
                        echo $date->format('d/m/Y');
                    }
                ?>
            </div>
        </div>
    </body>
</html>