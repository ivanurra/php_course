<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Uploads PHP</title>
</head>
<body>
    <h1>Uploads PHP</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo" />
        <input type="submit" value="Enviar" />
    </form>

    <h1>Images list:</h1>
    <?php
        $gestor = opendir('./images');

        if($gestor):
            while(($image = readdir($gestor)) !==false):
                if($image != '.' && $image != '..'):
                    echo "<img src='images/$image' />";
                endif;
            endwhile;
        endif;
    ?>
</body>
</html>

