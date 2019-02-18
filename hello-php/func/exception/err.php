<?php
// echo 5/0 or exit("除法錯誤");
?>
<?php
$f=@fopen("xxx","r") or exit("<h1>錯誤</h1>");
fclose($f);
?>
<hr>