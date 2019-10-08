<?php
function calcular(){
	$a=2;
	$b=7;
	$r=null;
	$r=$r. ($a+$b).'<br>';
	 $r=$r.($a-$b).'<br>';
	 $r=$r.($a*$b).'<br>';
	 $r=$r.($a/$b).'<br>';
	 return $r;
	 
}
echo calcular ();
$a=calcular ();
echo $a;
calcular ();
calcular();
?>