<?php
	$a=5;
	$b=10;
	$r=99;
	echo "El valor de a: ".$a;
	function test(&$x){
		global $r;
		$r=9;
		$res=$r+$x;
		$x=$res;
		#echo($r);
	}
	
	test($a);
	echo "El valor de a: ".$a;

?>