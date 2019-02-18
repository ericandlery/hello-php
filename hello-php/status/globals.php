<?php
echo $_SERVER;
echo count($_SERVER)."<br>";
foreach($_SERVER as $s){
    echo $s."<br>";
}
echo time();
// header("Refresh:2");
?>