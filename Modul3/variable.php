<html>
	<head>
		<title>Program Penjumlahan</title>
	</head>
	
	<body>
		<form method="POST" action="variable.php">
			Nilai A adalah : <input type="text" name="a" >
			<br>Nilai B adalah : <input type="text" name="b" >
			<br><input type="submit" name="c" value="jumlahkan">
		</form>
		<?php
		error_reporting (E_ALL ^ E_NOTICE);
		$A=$_POST['a'];
		$B=$_POST['b'];
		$submit=$_POST['c'];
		$jumlah= $A + $B ;
		 if($submit){
			 echo "nilai A adalah $A<br>";
			 echo "nilai B adalah $B<br>";
			 echo " hasil penjumlahan daei $A dan $B adalah $jumlah";
			 
		 }
		?>
	</body>
</html>