<?php
require( 'formData.php' );

if (isset($_FILES['prdImagen'])) {
    $prdImagen = subirImagen($_FILES['prdImagen']);
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="prdImagen">
    <button type="submit">Enviar</button>
</form>
<hr>
<?php
    if(!isset($prdImagen)){
        echo '<img src="images/productos/noDisponible.jpg">';
    } else {
        echo '<img src="'.$prdImagen.'" alt="" width="50%">';
    }

    ?>

</body>
</html>