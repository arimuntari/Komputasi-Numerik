<html>	
	<head>
		<title> Regresi Polynomial </title>
	<script>
	
		var jmldata = 0;
	function gaus(data){
		var i=0, j=0;
		for( i = 0; i < 3; i++){
			for( j = 0; j < 4; j++){
				document.getElementById(""+(i+1)+""+(j+1)).value = data[i][j];
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
		var nilai;
		for(i=0; i < jmldata; i++){
			 nilai = parseFloat(document.getElementById("x"+(i)).value);
			y = Math.pow(nilai, 0)*hasil[0] +  Math.pow(nilai, 1)*hasil[1] + Math.pow(nilai, 2)*hasil[2];
			//console.log(y);
			document.getElementById("rp"+i).value = y;
		}
	}	
	function input(){
		jml = parseFloat(document.getElementById("jml").value);
		if(jmldata==0){
			var br = document.createElement("br");
			var x = document.createElement("INPUT");
			x.setAttribute("type", "text");
			x.setAttribute("value", "X");
			x.setAttribute("size", "2");
			var y = document.createElement("INPUT");
			y.setAttribute("type", "text");
			y.setAttribute("value", "Y");
			y.setAttribute("size", "2");
			var rp = document.createElement("INPUT");
			rp.setAttribute("type", "text");
			rp.setAttribute("value", "Regresi Polynomial");
			var rl = document.createElement("INPUT");
			rl.setAttribute("type", "text");
			rl.setAttribute("value", "Regresi Linier");
			var sme = document.createElement("INPUT");
			sme.setAttribute("type", "text");
			sme.setAttribute("value", "Error");
			document.getElementById('list').appendChild(x);
			document.getElementById('list').appendChild(y);
			document.getElementById('list').appendChild(rp);
			document.getElementById('list').appendChild(rl);
			document.getElementById('list').appendChild(sme);
			document.getElementById('list').appendChild(br);
		}
		for(var i=jmldata;i<jmldata+jml;i++){	
			var br = document.createElement("br");
			var x = document.createElement("INPUT");
			x.setAttribute("type", "text");
			x.setAttribute("id", "x"+i);
			x.setAttribute("value", i+1);
			x.setAttribute("size", "2");
			var y = document.createElement("INPUT");
			y.setAttribute("type", "text");
			y.setAttribute("id", "y"+i);
			y.setAttribute("size", "2");
			var rp = document.createElement("INPUT");
			rp.setAttribute("type", "text");
			rp.setAttribute("id", "rp"+i);
			var rl = document.createElement("INPUT");
			rl.setAttribute("type", "text");
			rl.setAttribute("id", "rl"+i);
			var sme = document.createElement("INPUT");
			sme.setAttribute("type", "text");
			sme.setAttribute("id", "mse"+i);
			document.getElementById('list').appendChild(x);
			document.getElementById('list').appendChild(y);
			document.getElementById('list').appendChild(rp);
			document.getElementById('list').appendChild(rl);
			document.getElementById('list').appendChild(sme);
			document.getElementById('list').appendChild(br);
		}
	jmldata+=jml;
	}
	function hitung(){
		var data = [[],[],[],[]];
		x = [];
		y = [];
		for(var i=0;i<jmldata;i++){
			x[i] = parseFloat(document.getElementById("x"+(i)).value);
			y[i] = parseFloat(document.getElementById("y"+(i)).value);
		}
		for(var i=0;i<3;i++){
			data[i][0] = hit(x, 0+i);
			data[i][1] = hit(x, 1+i);
			data[i][2] = hit(x, 2+i);
			data[i][3] = hitY(x, y, i);
		}
		gaus(data);
		RegresiLinier();
		MSE();
	}
	function hit(x, pangkat){
		total =0;
		for(var i=0;i<jmldata;i++){
			total += Math.pow(x[i], pangkat);
		}
		return total;
	}
	function hitY(x, y, pangkat){
		total =0;
		for(var i=0;i<jmldata;i++){
			total += (Math.pow(x[i], pangkat) * y[i]);
		}
		return total;
	}
	function RegresiLinier(){
		var totX = 0, totY = 0, totXY = 0, totX2 = 0, pembilang, penyebut, M, rataY, rataX, C, X, Y;
		for(var i = 0;i<jmldata;i++){
			 x = parseFloat(document.getElementById("x"+(i)).value);
			 y = parseFloat(document.getElementById("y"+(i)).value);
			totX=x+totX;
			totY=y+totY;
			totXY=x*y+totXY;
			totX2=x*x+totX2;
		}
		pembilang = (jmldata*totXY)-(totX*totY);
		penyebut = jmldata*totX2-totX*totX;
		M = pembilang/penyebut;

		rataX = totX/jmldata;
		rataY = totY/jmldata;
		C = rataY - M*rataX;
		
		for(i=0; i < jmldata; i++){
			nilai = parseFloat(document.getElementById("x"+(i)).value);
		//	console.log(Y+"="+M+"*"+nilai+"+"+C);
			Y = M*nilai+C;
			document.getElementById("rl"+i).value = Y;
		}
	}
	function MSE(){
		for(i=0; i < jmldata; i++){
			y = parseFloat(document.getElementById("y"+(i)).value);
			rpx = parseFloat(document.getElementById("rp"+(i)).value);
			mse = y - rpx;
			document.getElementById("mse"+i).value = mse;
		}
	}
	</script>
	</head>
	<body>
	<div id="list" style="float:left;border:1px solid black;">
	</div>
		<div style="float:left;margin-left:15px;">
	Masukkan Jumlah Data
	<input type="text" id="jml" value="">
	<input type="button" onclick="input()" value="Input" style="width:100px"><br><br>
			<form action="#">
				<input type="text" id="11" size="4"> &nbsp;&nbsp;
				<input type="text" id="12" size="4"> &nbsp;&nbsp;
				<input type="text" id="13" size="4"> &nbsp;=&nbsp;
				<input type="text" id="14" size="4"><br><br>
				<input type="text" id="21" size="4"> &nbsp;&nbsp;
				<input type="text" id="22" size="4"> &nbsp;&nbsp;
				<input type="text" id="23" size="4"> &nbsp;=&nbsp;
				<input type="text" id="24" size="4"><br><br>
				<input type="text" id="31" size="4"> &nbsp;&nbsp;
				<input type="text" id="32" size="4"> &nbsp;&nbsp;
				<input type="text" id="33" size="4"> &nbsp;=&nbsp;
				<input type="text" id="34" size="4">&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp<br>
			</form>
			<div style="text-align:left;">
				A = <input type="text" id="1" > &nbsp;&nbsp; <br><br>
				B = <input type="text" id="2"> &nbsp;&nbsp; <br><br>
				C = <input type="text" id="3"> &nbsp;&nbsp; <input type="button" onclick="hitung();" value="Hitung" style="width:100px"> <br><br>
			</div>
		</div>
		
	<br>
	</body>
</html>