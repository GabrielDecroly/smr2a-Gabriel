<?php
function mes($n){
	$meses = ['enero','febrero','marzo','abril','mayo','junio','julio',
		'agosto','septiembre','octubre','noviembre','diciembre'
		];
	return $meses[$n-1];
}
echo mes(2);
echo mes(12);