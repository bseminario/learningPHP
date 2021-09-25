<h1>  Me quede en el #20</h1>

<?php
	$data=[
		[
			'nombre'=>'aaaaa',
			'email'=>'aaaaa@aa.aa'
		],
	
		[
			'nombre'=>'bbbbbb',
			'email'=>'bbbbb@bb.bb'
		],
	
		[
			'nombre'=>'cccccc',
			'email'=>'cccccc@ccc.cc'
		]
	
	
	
	];

	foreach($data as $item){
		echo $item['nombre']."<br>";
	}
?>
