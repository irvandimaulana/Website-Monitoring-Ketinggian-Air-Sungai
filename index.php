<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Monitoring Ketinggian dan Volume Air Sungai Di Kelurahan Kudaile</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<style type="text/css">
	.tangki{
		border-style: solid;
		width: 500px;
		height: 500px;
		left: 50%;
		transform: translate(-50%);
		position: sticky;
		border-bottom-left-radius: 20px;
		border-bottom-right-radius: 20px;

	}
	.air {
	
		left: 50%;
		bottom: 0px;
		transform: translate(-50%);
		position: absolute;
		border-bottom-left-radius: 20px;
		border-bottom-right-radius: 20px;
		background-color: blue;
	}
</style>
<script type="text/javascript">
	$(document).ready(function () {
		setInterval(function() {
        $("#data").load('data.php')
		}, 1000);
	});

</script>
</head>
<body>

<div class="container" style="text-align:center; " > 
	<img src="images/poltek.png" style="width: 120px; margin-top: 25px;">
	<h3>Sistem Monitoring Ketinggian dan Volume Air Sungai di Kelurahan Kudaile <br> Berbasis Web</h3>
	<div style="font-size: 20px;">Tinggi Max Sungai : 10 Meter</div>
	<div id="data"></div>
</div>
</body>
</html>