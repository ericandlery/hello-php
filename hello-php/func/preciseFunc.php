<?php
function isBoolean(string $str):bool{
    if("TRUE"===strtoupper($str) || "FALSE"===strtoupper($str)){
        return true;
    }else{
        return false;
    }
}
?>
<?php
echo isBoolean("false");
?>
<hr>
<?php
function getExhange(int $money,float $rate):float{
    return $money*$rate;
}
?>
<?php
$f=getExhange(4,30.52);
echo gettype($f);
echo "<br>";
echo $f;
?>
<hr>
<?php
function changeParam(int $n){
    $n=555;
}
function changeRealParam(int &$n){
    $n=5555;
}
?>
<?php
$n=123;
changeParam($n);
echo $n;
echo "<br>";
changeRealParam($n);
echo $n;
?>
<h3>Default Params</h3>
<?php
function getArea(int $width=7,int $height=13){
    return $width*$height;
}
echo "<p>5*3=".getArea(5,3)."</p>";
echo getArea();
?>