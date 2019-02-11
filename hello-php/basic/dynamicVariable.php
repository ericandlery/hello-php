<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php
$n="kimi";
echo $n;
echo "<br>";
$$n="ralf";
echo $n;
echo "<br>";
echo $$n;
echo "<br>";
echo $kimi;
echo "<br>";
echo ${$n};
echo "<hr>";
echo "$n"." "."${$n}";
echo "<hr>";
echo $$n." ".$n;
?>
<hr>
<?php
$m1="bar";
$m2="minardi";
echo $m1," ",$m2;
echo "<br>";
// print $m1,$m2;
?>
<hr>
<?php
echo("Albert Park");
print("Suzuka");
?>
</body>
</html>