<?php
$test[][]="kimi";
echo $test[0][0];
$test[][]="ralf";
echo $test[1][0];
$test[0][1]="mika";
echo $test[0][1];
?>
<hr>
<?php
$map["color"]="red";
$map["color"]="blue";
$map["team"]="Sauber";
$map["rpm"]=19000;
echo $map."<br>";
echo $map["color"]."<br>";
echo count($map)."<br>";
foreach ($map as $m){
    echo $m."<br>";
}
?>
<hr>
<?php
$phpMap=array(
    "game"=>"Deus Ex",
    "sound"=>44.1,
    "video"=>1920,
    "date"=>time()
);
foreach ($phpMap as $m){
    echo $m."<br>";
}
?>