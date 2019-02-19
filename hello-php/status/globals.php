<?php
// echo $_SERVER;
// echo count($_SERVER)."<br>";
// foreach($_SERVER as $s){
//     echo $s."<br>";
// }
echo time();
// // header("Refresh:2");
?>
<hr>
<?php
foreach ($GLOBALS as $g){
    echo $g."<br>";
}
?>
<hr>
<?php
foreach($_SERVER as $k=>$v){
    echo $k." = ".$v."<br>";
}
?>
<hr>
<?php
// header("Location:new_location.php");
header("Refresh:2");//This line will be ignored due to the next line.
header("Refresh:10;url=new_location.php");
?>