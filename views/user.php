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
            <h2 class="titulo-secundario">Información y Posts del Usuario</h2>
            
            <div class="data">
                <label>Id:</label>
                <p><?php echo $user['id']; ?></p>
            </div>

            <div class="data">
                <label>Nombre:</label>
                <p><?php echo $user['name']; ?></p>
            </div>

            <div class="data">
                <label>Username:</label>
                <p><?php echo $user['username']; ?></p>
            </div>

            <div class="data">
                <label>Email:</label>
                <p><?php echo $user['email']; ?></p>
            </div>

            <div class="data">
                <label>Ciudad de Recidencia:</label>
                <p><?php echo $user['address']['city']; ?></p>
            </div>

            <div class="data">
                <label>Calle:</label>
                <p><?php echo $user['address']['street']; ?>, </p>
                <label>Continuación </label>
                <p><?php echo $user['address']['suite']; ?></p>
            </div>


            <div class="data">
                <label>Teléfono:</label>
                <p><?php echo $user['phone']; ?></p>
            </div>

            <div class="data">
                <label>Página Web:</label>
                <p><?php echo $user['website']; ?></p>
            </div>

            <div class="data">
                <label>Compañia:</label>
                <p><?php echo $user['company']['name']; ?></p>
            </div>


        </div>

        <div>
            <h2 class="titulo-secundario">Posts de <?php echo $user['name']; ?></h2>
            <table class="contenedor table">
                <thead class="table-head">
                    <tr>
                        <th style="padding: 5px;">Id Post</th>
                        <th>Título Post</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($userPosts as $post) {
                            echo "<tr>";
                            echo '<td style="text-align: center;">'.$post['id']."</td>";
                            echo "<td>".$post['title']."</td>";
                            echo 
                            '<td> 
                                <form action="./post-info.php" method="get">

                                    <button class ="button" name="id" value="'.$post['id'].'">Ver más...</button>
                                </form>
                            </td>';
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>