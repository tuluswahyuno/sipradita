<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Pencarian dengan CodeIgniter 3 &raquo; Jaranguda.com</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
 
	<div class="container">
	<h3>Hasil Pencarian</h3>
	<hr>
 
		<?php
 
		if(count($cari)>0)
		{
			foreach ($cari as $data) {
			echo $data->nama . " => " . $data->no_rm ."<br>";
			}
		}
 
		else
		{
			echo "Data tidak ditemukan";
		}
 
		?>
 
	</div>
	</body>
</html>