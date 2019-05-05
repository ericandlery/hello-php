<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Your Cart</title>
<?php
session_start();
$list=$_SESSION["list"];
?>
</head>
<body>
	<h1>Your Cart</h1>
	<?php
	if($list==0){
	    ?>
	    <h2>You didn't add anything to your cart.</h2>
	    <?php
	}else{
	?>
	<table border="2">
		<tr>
			<td>Function</td>
			<td>Serial No.</td>
			<td>Product Name</td>
			<td>Quantity</td>
		</tr>
		<?php
		for($i=0;$i<$list;$i++){
		    ?>
		    <tr>
		    	<td>Remove</td>
		    	<td><?php echo $i+1;?></td>
		    	<td><?php echo $_COOKIE[$i."_name"]?></td>
		    	<td><?php echo $_COOKIE[$i."_qt"]?></td>
		    </tr>
		    <?php
		}
		?>
	</table>
	<?php
	}
	?>
</body>
</html>