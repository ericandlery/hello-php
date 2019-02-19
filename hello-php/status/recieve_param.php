<h1>I got Params!</h1>
<?php
$driverName=$_GET["name"];
$revolution=$_GET["rpm"];

$postName=$_POST["name"];
$postRpm=$_POST["rpm"];
?>
<h3>Name: <?php echo $driverName;?></h3>
<h3>RPM: <?php echo $revolution;?></h3>
<hr>
<h5>POST</h5>
<?php
echo $postName."<br>";
echo $postRpm."<br>";
?>