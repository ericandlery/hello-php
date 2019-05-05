<?php
$ar=array("kimi","ralf","mika","nando",555,777.0);
echo $ar."<br>";
list($a,$c)=$ar;
echo $a." ".$c."<br>";
list($a,,,$b)=$ar;
echo $a." ".$b."<br>";
echo var_dump($ar)."<br>";
print_r($ar);
?>
<hr>
<?php
$list=array("McLaren","Williams","BAR","Jordan","Minardi");
// echo each($list)."<br>";
print_r(each($list));
echo "<br>";
print_r(each($list));
?>
<hr>
<?php
$map=array("rpm"=>19000,"team"=>"McLaren","Driver"=>"Kimi","isRace"=>true);
var_dump($map);
echo "<br>";
print_r(each($map));
echo "<br>";
print_r(each($map));
?>