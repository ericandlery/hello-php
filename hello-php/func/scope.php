<?php
$a=31;
$b=13;
?>
<h1>SCOPE TRANING</h1>
<?php
echo $a."<br>";
echo $b,"<br>";
?>
<hr>
<?php
function func1(){
    echo $a." ".$b."<br>";
}
function func2(){
    global $a;
    global $b;
    echo $a." ".$b."<br>";
}
func1();
echo "<hr>";
func2();
?>