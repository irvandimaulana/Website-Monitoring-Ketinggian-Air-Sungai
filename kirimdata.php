<?php 
$konek = mysqli_connect("localhost", "root", "", "dbwaterlevel");

$tinggi = $_GET['tinggi'] ;

mysqli_query($konek, "UPDATE tbsungai SET tinggi='$tinggi'");
 ?>