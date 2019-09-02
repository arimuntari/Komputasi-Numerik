<?php
$x1 = 1;
$x2 = 2;
$x3;
echo "<table width='100%'><tr><td >X1</td><td>X2</td><td>X3</td><td>FX1</td><td>FX2</td><td>FX3</td></tr>";
for($i=1;$i<=10;$i++){
	$fx1 =fungsi($x1);
	$fx2 = fungsi($x2);
	$x3 = $x2 - ($fx2 *($x1-$x2))/($fx1-$fx2);
	$fx3 =fungsi($x3);
	echo "<tr><td>$x1</td><td>$x2</td><td>$x3</td><td>$fx1</td><td>$fx2</td><td>$fx3</td></tr>";
	if($fx1*$fx1 > $fx2*$fx2){
		$x1 = $x3;
	}else{
		$x2 = $x3;
	}
}


function fungsi($x){
	return pow($x, 3) + pow($x, 2) - 3*$x - 3;
}
?>
</table> 