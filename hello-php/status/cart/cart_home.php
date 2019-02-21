<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cart Example</title>
<script type="text/javascript">
	function seeCart(){
// 		alert();
		var w=window.open("cart.php","_blank","width=500,height=300,top=300,left=400");
	}
</script>
<?php
session_start();
// if(!isset($_SESSION)){
//     foreach($_COOKIE as $k=>$v){
//         setcookie($k,"");
//     }
//     $_SESSION["list"]=0;
// }
if(!isset($_POST["form"])){
    $_SESSION["list"]=0;
    foreach($_COOKIE as $k=>$v){
        setcookie($k,"",time()-3600);
    }

}
if(isset($_POST["form"]) && $_POST["form"]==="form"){
    $id=$_SESSION["list"]++;
//     echo $id;
    setcookie($id."_name",$_POST["item"],time()+1200);
    setcookie($id."_qt",$_POST["number"],time()+1200);
}
?>
<?php
// foreach ($_COOKIE as $c){
//     echo $c;
// }

// echo "<br>SESSION".$_SESSION["list"];
?>
</head>
<body>
	<h1>Shopping Cart</h1>
	<form action="cart_home.php" method="post">
		Items:
		<select name="item">
			<option value="MP4-17">MP4-17</option>
			<option value="FW-24">FW-24</option>
			<option value="F2002">F2002</option>
			<option value="TF-102">TF-102</option>
			<option value="BAR004">BAR004</option>
		</select>
		Quantity:
		<input type="number" name="number" value="1">
		<input type="submit" value="Add">
		<input hidden type="text" name="form" value="form">
		<?php
		if($_SESSION["list"]>0){
		    echo "You've added ".$_SESSION["list"]." item(s).";
		}
		?>
	</form>
	<br>
	<a href="check_cookie.php">Check Cookie</a><br>
	<a href="#" onclick="seeCart()">Check Shopping Cart</a>
</body>
</html>