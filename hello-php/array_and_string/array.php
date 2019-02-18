<?php
$names[]="Kimi";
$names[]="Ralf";
$names[]="David";
echo $names[0]."==".$names[1]."==".$names[9];
?>
<hr>
<?php
$teams[1]="McLaren";
$teams[5]="Williams";
$teams[6]="BAR";
$teams[10]="Jordan";
echo $teams[0]."=".$teams[5];
?>
<hr>
<?php
$rpm=array(19000,18000,12000);
echo $rpm;
echo "<br>";
echo $rpm[0];
echo "<br>";
echo count($rpm)."==";
echo count($teams)."<br>";
for($i=0;$i<count($teams);$i++){
    echo $teams[$i]."<br>";
}
for($i=0;$i<count($names);$i++){
    echo $names[$i]."<br>";
}
?>
<hr>
<?php
foreach($teams as $team){
    echo $team,"<br>";
}
?>