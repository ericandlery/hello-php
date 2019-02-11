<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php
echo "Undefined Variable=".$v;
?>
<hr>
<?php
$v="Ralf Kimi";
?>
<?php
echo $v."<br>";
$v=555;
echo $v;
?>

<?php
echo $v="Magny-Cours";
?>
<hr>
<?php
$m1="kimi";
$m2="ralf";
echo $m1=$m2;
echo $m1="mikaKKK";
echo $m2;
echo "<br>";
echo "KKK<br>\nYYY";
echo "<br>";
$m1=&$m2;
echo "<br>";
echo $m1." ";
echo $m2;
?>

</body>
</html>