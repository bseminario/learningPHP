<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="test.css">
</head>
<body style="background:red;">
    <form action="accion.php" method="post">
     <input type="text" name="nombre" placeholder="Nombre"/>
     <br>
     <input type="text" name="edad" placeholder="Edad" />
     <input type="submit" />
    </form>
    <section>
        <h2>Operadores y sus valore en booleano</h2>
        <p>Cero 0-><?php var_dump(234); var_dump(0);var_dump(0.44);?></p>
        <p>Caracteres y cadenas de caracteres:</p>
        <?php var_dump("asdf");var_dump('26236');  
        var_dump('a');var_dump("");?>
    </section>
    <section style="background:forestgreen;">
    <?php  
        $a=1;
        ++$a;
        echo "El valor de a es: ".$a;
    
    ?>
    </section>
    <section style="background:navy;">
    <ol>
    <?php  
        for($i=1;$i<5;$i++){
            
            echo "<li>Linea $i</li>";
        }    
    ?>
    </ol>
    </section>
    <section>
        <?php
            $a=5;$b=5;
            $valor=$a>$b?"mayor":($a<$b?"menor":"igual");
            echo $valor;
        ?>
    </section>
    <section class="match">
        <h1>Novedad PHP8: match</h1>
        <?php
            $x=5;
            echo match($x){
                1=>"Primero",
                2=>"Segundo",
                3=>"Tercero",
                default=>"No tiene merito\n"
            };
            echo "  \n";
            $nombres=['hirsdop','ambedssr','sdsd','ererui'];
            foreach($nombres as $indice){
                echo $indice."<br>";
            }
            // exit();//Elimina el progrma
            #klklsd
            // die();
        ?>
    </section>
    <section class="funciones">
    <?php
            echo time()."es el tiempo<br>";
            echo "Raiz".sqrt(8)."<br>";
            echo "pi".pi();
        ?>
        <h1>Definiendo funciones, ejemplos</h1>
            <?php
            function factorial($numero){
                $resultado=1;
            for($i=1;$i<=$numero;$i++){
                $resultado=$resultado*$i;
            }
            return $resultado;
            }
            echo factorial(7);
            
            ?>


    </section>
    <a href="https://youtu.be/cAdBqOI8gwQ?list=PLZ2ovOgdI-kUSqWuyoGJMZL6xldXw6hIg&t=274">Curso PHP me quede aqui</a>
    <h1>Creando bucle para imagenes en LaTEx</h1>
    
            
            
    
    

    <?php for($i=1;$i<28;$i++){
        echo "<p>\begin{figure}[H]</p><br><p>\centering</p>";
        echo "<p>\includegraphics[width=\textwidth]{img3/1 ($i).png}</p>";
        echo "<p>\\end{figure}</p>";
    }?>
</body>
</html>
