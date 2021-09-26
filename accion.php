<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesando Latex</title>
</head>
<body>
    <script>
        alert("Esta pagina procesa bucles recursivos");
    </script>
<?php 
    #Este bucle permite insertar muchas imagenes, solamente hay que modificar el nombre
    for($i=1;$i<38;$i++){
        echo "<p>\begin{figure}[H]\centering\includegraphics[width=\\textwidth]{img3/1 ($i).png}\\end{figure}</p>";
    }?>
</body>
</html>

