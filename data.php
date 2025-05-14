<?php 
$konek = mysqli_connect("localhost", "root", "", "dbwaterlevel");
$sql = mysqli_query($konek, "SELECT * FROM tbsungai");
$data = mysqli_fetch_array($sql);

$tinggi_max_sungai = 1000;
$jari2 = 1;
$phi = 3.14;

$tinggi_air = $tinggi_max_sungai - $data['tinggi']*100;

$prosentase_tinggi_air = ($tinggi_air/$tinggi_max_sungai)*100;

$volume = $phi * ($jari2 * $jari2) *($tinggi_air/100);

$liter = $volume * 1000 ;
 ?>
<div class="tangki">
<div class="air" style="width: 100%; height: <?php echo $prosentase_tinggi_air; ?>%; color: white;">
	<?php 
	echo "Tinggi Air : ".($tinggi_air/100)."m";
	echo "<br>";
	echo "volume Air : ".($volume)."m3";
	 ?>
</div>
	</div>