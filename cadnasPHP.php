<style>
	h1{
		background:tomato;
		width:30%;
		height:80px;
		font-family:cursive;
		position: relative;
		}	
		p{
			background:limegreen;
		}
		h2{
			background:yellow;
		}
</style>
<?php
		$cadena="aeioú";
		echo "Los caracteres con tildes se consideran como dos caracteres:<br>";
		echo "El tamanio de la cadena es:".strlen($cadena)."<br>";
		echo "Si se  usa el metodo mb_strlen()".mb_strlen($cadena)."<br>Muy util para ver caracteres en castellano<br>";
		echo "strpos() busca en la cadena de izquierda a derecha";
		echo strpos($cadena,'i')."<br>";
		$txt="aeiouidfg";
		echo "En esta cadena ".$txt ."la letra i se encuentra en la posicion:".strpos($txt,'i')."<br>";
		$y=9;
		echo ($y<0)? "abcd": "1234";
		####MANIPULANDO CADENAS
		$vocales="aeiou";
		$vocalesTilde="aéiou";
		$texto= "En la programación se convierten las ideas abstractas del mundo real en texto ordenado segun la mente, de ahi el programador es quien evalua las posibilidades de esas ideas en convertirse en realidad según sus capacidades (propias) y de las tecnologías que maneja";
		echo "<h1>Métodos relevantes en cadenas de caracteres:</h1>";
		echo "<h2>Las cadenas de caracteres son arreglos con índices:</h2><h2>Se tienen las cadenas a procesar:</h2>";
		echo "<br>Vocales->".$vocales."<br>VocalesTilde->".$vocalesTilde;
		echo "<p>Texto->$texto</p>";
		echo "strlen()->tamaño de una cadena"."<h3>Vocales::".strlen($vocales)."</h3>vocalesTilde: ".strlen($vocalesTilde)."<br>Texto:: ".strlen($texto);
		echo "<br>Se reconoce tildes en vocalesTilde:  ".mb_strlen($vocalesTilde)."<br>";
		echo "<h2>Posicion de cadena  de derecha a izquierda</h2>".strpos($vocales,'e');
		
		echo "<h2>Encuentra la posicion del caracter en la cadena de derecha a izquierda</h2>".strrpos($texto,'e');
		echo "<h3>busca cadena de caracteres en la cadena, da como resultado un bool</h3>".str_contains($texto,'programador');
		if(str_contains($texto,'revista'))
		{echo "0000";}else{echo "not found";}
		echo "<h3>compara cadenas</h3>".strcmp($texto,$vocales);
		echo "<h2>Extrayendo los primeros caracteres  con indice positivo:</h2>".substr($texto,5);
		echo "<h2>Extrayendo solamente los ultimos  caracteres con indice negativo:</h2>".substr($texto,-5);
		echo "<h2>Reemplazando caracteres</h2>".str_replace("progra","*******",$texto);
		echo "<h2>Reemplazando mayusculas y minusculas</h2>".strtoupper($vocales);
		#upfirst() para que la primera sea mayuscula 
		#upwords() para que cada palabra comience  con mayusculas
?>
