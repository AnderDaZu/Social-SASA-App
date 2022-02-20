<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Usuario</title>
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./views/css/styles.css">
</head>
<body>

    <head>
        <h1 class="titulo">Social sasa App</h1>
    </head>

    <nav class="nav">
        <div class="contenedor">
            <a class="nav-link" href="index.php">Inicio</a>
        </div>
    </nav>

    <div class="contenedor">
        <div>
            <h2><?php echo  $post['title'];?></h2>
            <p><?php echo $post['body']; ?></p>
            <div class="data">
                <h4 class="data">Autor: <?php echo $user['name']; ?>.</h4>
                <p>Post n°<?php echo  $post['id']; ?></p>
            </div>
        </div>

        <div>
            <h3>Comentarios</h3>
            <div class="card">
                <?php
                    foreach ($comments as $comment) {
                        echo '<div class="card-comment">';
                        echo '<h4>Usuario: '.$comment['name'].', email: '.$comment['email'].'</h4>';
                        echo '<p>'.$comment['body'].'.</p>';
                        echo '</div>';
                    } 
                ?>

            </div>
        </div>
    </div>
    
</body>
</html>