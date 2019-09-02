<html>
	<head>
		<title> Gaus </title>
			
	<script>
	function hitung(){
		var data = [[],[],[]];
		var i=0, j=0;
		for( i = 0; i < 3; i++){
			for( j = 0; j < 4; j++){
				//console.log(j);
				data[i][j] = parseFloat(document.getElementById(""+(i)+""+(j)).value);
			}
		}
		m = data[1][0] / data[0][0] ;	
		data[1][0] = data[1][0] - m * data[0][0] / data[1][0];
		console.log(data[1][1]+"-"+m+"*"+data[0][1]+"/"+data[1][1]);
		data[1][1] = data[1][1] - (m * data[0][1] / data[1][1]);
		
		console.log(data[1][1]);
		data[1][2] = data[1][2] - m * data[0][2] / data[1][2];
		data[1][3] = data[1][3] - m * data[0][3] / data[1][3];
		
		m = data[2][0] / data[0][0] ;	
		data[2][0] = data[2][0] - (m * data[0][0] / data[2][0]);
		data[2][1] = data[2][1] - (m * data[0][1] / data[2][1]);
		data[2][2] = data[2][2] - (m * data[0][2] / data[2][2]);
		data[2][3] = data[2][3] - (m * data[0][3] / data[2][3]);
		
		m = data[2][1] / data[1][1] ;
		data[2][0] = data[2][0] - m * data[1][0] / data[2][0];
		data[2][1] = data[2][1] - m * data[1][1] / data[2][1];
		data[2][2] = data[2][2] - m * data[1][2] / data[2][2];
		data[2][3] = data[2][3] - m * data[1][3] / data[2][3];	
		
		
		var hasil = [];
		var total = 0;
		for(  i = 2; i >= 0; i-- ){
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
				<input type="text" id="00" size="2"> &nbsp;&nbsp;
				<input type="text" id="01" size="2" value="1"> &nbsp;&nbsp;
				<input type="text" id="02" size="2"> &nbsp=&nbsp
				<input type="text" id="03" size="2"><br><br>
				<input type="text" id="10" size="2"> &nbsp;&nbsp;
				<input type="text" id="11" size="2"> &nbsp;&nbsp;
				<input type="text" id="12" size="2"> &nbsp=&nbsp
				<input type="text" id="13" size="2"><br><br>
				<input type="text" id="20" size="2"> &nbsp;&nbsp;
				<input type="text" id="21" size="2"> &nbsp;&nbsp;
				<input type="text" id="22" size="2"> &nbsp=&nbsp
				<input type="text" id="23" size="2"><br>
			</form>
			<div style="width:200px;text-align:left;">
				A = <input type="text" id="1" size="3"> &nbsp;&nbsp;  &nbsp;&nbsp; <input type="button" onclick="hitung();" value="Hitung" style="width:100px"> <br><br>
				B = <input type="text" id="2" size="3"> &nbsp;&nbsp;  &nbsp;&nbsp; <br><br>
				C = <input type="text" id="3" size="3"> &nbsp;&nbsp;<br><br>
			</div>
		</center>
	</body>
</html>