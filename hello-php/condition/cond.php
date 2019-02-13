<?php
$s="xxx";
if($s=="kimi"){
?>
<h5>My name is <?php echo $s;?> raikkonen.</h5>
<?php
}elseif("ralf"===$s){
?>
<h4>His name is <?php echo $s;?> schumacher.</h4>
<?php
}else{
?>
<h1>I'm Mika</h1>
<?php
}
?>
<hr>
<?php
$rpm=20000;
switch($rpm){
    case 12000:
        echo "vaccum cleaner";
        break;
    case 18000:
        echo  "melody";
        break;
    case 19000:
        echo "My ears are tearing!";
        break;
    default:
        echo "???";
        break;
}
?>
<hr>
<?php
echo (1=="1")?"true":"false";
echo "<br>";
echo (1==="1")?"true":"false";
?>
<hr>
<?php
if(-1){
    echo "if true";
}
?>
<hr>
<?php
if(77<=>"77" || 1===1){
?>
<h1>IF Statement</h1>
<?php
    for($i=0;$i<=70;$i+=10){
        echo "<p style=\"font-size:".$i."px;color: red;\">haha+".$i."</p>\n";
    }
?>
<?php
}
?>
<hr>
<?php
$w=1;
while($w<10){
    echo "<h6>".$w."</h6>";
    $w++;
}
?>
<hr>
<?php
$do=10;
do{
    echo "do";
    $do--;
}while($do>1);
?>