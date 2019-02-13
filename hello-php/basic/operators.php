<h1>Notice the results are 1 or 0.</h1>
<?php
$n1="5";
$n2=5;
echo $n1."<br>";
echo $n2."<br>";
echo ($n1==$n2)."<br>";
echo ($n1!=$n2)."<br>";
echo ($n1===$n2)."<br>";
echo ($n1!==$n2)."<br>";
?>
<hr>
<?php
$c1=3;
$c2=8;
echo ($c1<=>$c2)."<br>";
echo ($c2<=>$c1)."<br>";
echo ($c2<=>$c2)."<br>";
echo ($n1<=>$n2)."<br>";
echo "<br>";
echo ("a"<=>"b")."<br>";
echo ("a"<=>"A")."<br>";
echo ("a"<=>"")."<br>";
echo (""<=>"a")."<br>";
?>
<hr>
<?php
echo @(5/0)."<br>".$php_errormsg;
?>
<hr>
<?php
echo (int)"555";
// $num-ber=5;
?>