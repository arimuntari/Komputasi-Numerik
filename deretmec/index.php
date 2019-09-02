<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Deret Meclaurin dengan Cos</title>
</head>
<form method="POST" action="index.php">
	<table>
	  <tr>
		<td>Masukkan X</td>
		<td>:</td>
		<td><input type="text" name="cos" id="cos"  value="<?php echo $_REQUEST['cos']; ?>"></td>
	  </tr>
	  <tr>
		<td>Suku Ke-n</td>
		<td>:</td>
		<td><input type="text" name="suku" id="suku"  value="<?php echo $_REQUEST['suku']; ?>"></td>
	  </tr>
	  <tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="hitung" value="Hitung" ></td>
	  </tr>
	</table>
</form>
<?php
if(!empty( $_REQUEST['cos'])){
	function factorial($bil){
      if($bil<=1){
            return 1;
      }else{
            //fungsi rekursif
            return $bil*factorial($bil-1);
	  }
	}
		$x= $_REQUEST['cos'];
		$n = $_REQUEST['suku'];
		$x0 = 0;
		$hasil = 0;
		$y = $x-$x0;
		$temp = 0;
		for($i=0;$i<=$n;$i++){		
			$pangkat = pow($x, $i);
			if($i%4==0){
				$hasilcos = number_format(cos($x0), 4);
			}else if($i%4==1){
				$hasilcos = number_format(-sin($x0), 4);
			}else if($i%4==2){
				$hasilcos = number_format(-cos($x0), 4);
			}else if($i%4==3){
				$hasilcos = number_format(sin($x0), 4);
			}
			$k = $pangkat/factorial($i);
			$temp = $hasilcos * $k;
			echo "(".$hasilcos."*".$k.")=".$temp."<br>";
			$hasil += $temp;
		}
	echo "<br><br>".$hasil;
	
}
?>
</html>
