<html>	
	<head>
		<title> Gaus </title>
			
	<script>
	function hitung(){
		var data = [[],[],[],[]];
		var i=0, j=0;
		for( i = 0; i < 3; i++){
			for( j = 0; j < 4; j++){
				//console.log(j);
				data[i][j] = parseFloat(document.getElementById(""+(i+1)+""+(j+1)).value);
			}
		}
		for(  i = 0; i < 2; i++ ){
			for(  j = i + 1; j < 3; j++ ){
				m = data[j][i] / data[i][i];
				data[j][0] = data[j][0] - m * data[i][0];
				data[j][1] = data[j][1] - m * data[i][1];
				data[j][2] = data[j][2] - m * data[i][2];
				data[j][3] = data[j][3] - m * data[i][3];
			}
		}
		var hasil = [];
		for(  i = 2; i >= 0; i-- ){
		var total = 0;
			for(  j = 2; j > i; j-- ){
				total = total + ( data[i][j] * hasil[j] );
			}
			hasil[i] = ( data[i][3] - total ) / data[i][i];
		}
		for(  i = 0; i < 3; i++ ){
			document.getElementById(""+(i+1)).value =  hasil[i];
		}
		
	}
	</script>
	</head>
	
	<body>
		<center>
			<form action="#">
				<input type="text" id="11" size="2"> &nbsp;&nbsp;
				<input type="text" id="12" size="2"> &nbsp;&nbsp;
				<input type="text" id="13" size="2"> &nbsp=&nbsp
				<input type="text" id="14" size="2"><br><br>
				<input type="text" id="21" size="2"> &nbsp;&nbsp;
				<input type="text" id="22" size="2"> &nbsp;&nbsp;
				<input type="text" id="23" size="2"> &nbsp=&nbsp
				<input type="text" id="24" size="2"><br><br>
				<input type="text" id="31" size="2"> &nbsp;&nbsp;
				<input type="text" id="32" size="2"> &nbsp;&nbsp;
				<input type="text" id="33" size="2"> &nbsp=&nbsp
				<input type="text" id="34" size="2"><br>
			</form>
			<div style="width:200px;text-align:left;">
				A = <input type="text" id="1" size="3"> &nbsp;&nbsp;  &nbsp;&nbsp; <input type="button" onclick="hitung();" value="Hitung" style="width:100px"> <br><br>
				B = <input type="text" id="2" size="3"> &nbsp;&nbsp;  &nbsp;&nbsp; <br><br>
				C = <input type="text" id="3" size="3"> &nbsp;&nbsp;<br><br>
			</div>
		</center>
	</body>
</html>