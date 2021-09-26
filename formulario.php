<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/formulario.css">
</head>
<body>
    <form action="formularioEnvio.php" method="post" class="formulario">
        <input type="text" name="nombre" id="nombre" placeholder="nombre">
        <input type="text" name="apellido" id="apellido" placeholder="apellido">
        <input type="email" name="correo" id="correo" placeholder="correo">
        <fieldset>
            <label for="loc1">Localidad 1</label><input type="radio" name="localización" id="loc1" >
            <label for="loc2">Localidad 2</label><input type="radio" name="localización" id="loc2">
            <label for="loc3">Localidad 3</label><input type="radio" name="localización" id="loc3">
        </fieldset>
        <fieldset>
            <p>Opciones</p>
            <label for="interes1">Interes1</label><input type="checkbox" name="interes" id="interes1">
            <label for="interes2">Interes2</label><input type="checkbox" name="interes" id="interes2">
            <label for="interes3">Interes3</label><input type="checkbox" name="interes" id="interes3">
            <label for="interes4">Interes4</label><input type="checkbox" name="interes" id="interes4">
        </fieldset>
        <label for="curriculum">Subir curriculum en PDF</label><input type="file" name="curriculum" id="curriculum">
	<input type="button" value="Enviar" class="botonEnvio">
	<input type="submit">
    </form>
    
</body>
</html>
