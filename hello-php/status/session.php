<?php
session_start();
echo session_id();
?>
<?php
if(!isset($_SESSION["counter"])){
    $_SESSION["counter"]=1;
}else{
    $_SESSION["counter"]=$_SESSION["counter"]+1;
}
?>
<h1>第<?php echo $_SESSION["counter"];?>次訪問</h1>
<?php
// session_destroy();
?>