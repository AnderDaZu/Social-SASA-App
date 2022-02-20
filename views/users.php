<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
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

    <table class="contenedor table">
        <thead class="table-head">
            <tr>
                <th class="table-head-row">Nombre Usuario</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($users as $user) {
                    echo "<tr>";
                    echo "<td>".$user['name']."</td>";
                    echo "<td>".$user['email']."</td>";
                    echo 
                    '<td> 
                        <form action="./user-info.php" method="get">
                            <button class ="button" name="id" value="'.$user['id'].'">Ver más...</button>
                        </form>
                    </td>';
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
