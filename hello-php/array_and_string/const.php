<?php
const NAMES=array(
    "Kimi",
    "Ralf",
    "David",
    "Juan",
    "Mika"
);
echo NAMES."<br>";
echo NAMES[1]."<br>";
echo count(NAMES)."<hr>";
/*You can't do the following line.*/
// NAMES[9]="jjj";
foreach(NAMES as $name){
    echo "The Name Is ".$name."<br>";
}
?>
<hr>
<?php
const TEAMS="McLaren";
echo "1. ".TEAMS;
$teams[0]="McLaren";
$teams[1]="Williams";
$teams[2]="BAR";
$teams[3]="Minardi";
/*Can't change const value*/
const TEAMS="BAR";
echo "<br>";
echo "2. ".TEAMS;
?>
<hr>
<?php
define("CIRCUITS",[
    "Silverstone",
    "Magny-Cours",
    "Indiana 500",
    "Suzuka"
]);
foreach(CIRCUITS as $c){
    echo $c,"<hr>";
}
?>