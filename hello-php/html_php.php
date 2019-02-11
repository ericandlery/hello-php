<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<style type="text/css">
<?php
$color="aqua";
?>
    body{background-color: <?php echo $color;?>;}
</style>
<script type="text/javascript">
	window.onload=function(){
		<?php
		for($i=0;$i<10;$i++){
		?>
		console.log(<?php echo $i;?>);
		console.log(<?php print $i;?>);
		<?php
		}
		?>
	}
</script>
</head>
<body>
	<h1>Hello PHP World</h1>
	<p>PHP works on HTML, JavaScript and CSS.</p>
	<h1>echo doesn't return a value, while print does. echo is a little bit faster than print.</h1>
<?php
$start=25;
$end=30;
for($i=$start;$i<$end;$i++){
?>
<p style="font-size: <?php echo $i;?>px">kimi</p>
<?php
}
?>
<?php
echo "<h1>Ralf</h1>";
?>
</body>
</html>