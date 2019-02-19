<?php
if($_POST["form"]!==form || !isset($_POST["mode"])){
    ?>
<h1>More Form Options</h1>
<form action="more_form.php" method="post">
	F1: <input type="radio" name="type" value="f1"><br>
	Indy: <input type="radio" name="type" value="indy">
	<hr>
	Circuits: <br>
	<select name="circuit">
		<option value="uk">Silverstone</option>
		<option value="us">Indianapolis 500</option>
		<option value="jp">Suzuka</option>
		<option value="at">A1-Ring</option>
		<option value="gm">Hockenheim</option>
	</select>
	<hr>
	<?php
	if($_POST["form"]===form && !isset($_POST["mode"])){
	    echo "你沒設定MODE";
	}
	?>
	<table border="2">
		<tr>
			<td>Mode</td><td>Practice</td><td>Qualifying</td><td>Warm Up</td><td>Race</td>
		</tr>
		<tr>
			<td>Select</td>
			<td>
				<input type="checkbox" name="mode[]" value="p">
			</td>
			<td>
				<input type="checkbox" name="mode[]" value="q">
			</td>
			<td>
				<input type="checkbox" name="mode[]" value="w">
			</td>
			<td>
				<input type="checkbox" name="mode[]" value="r">
			</td>
		</tr>
	</table>
	<hr>
	<input type="text" name="form" value="form" hidden>
	<input type="submit" value="OK">
</form>
    <?php
}else{
$sessions="";
$type=$_POST["type"];
$circuit=$_POST["circuit"];
$mode=$_POST["mode"];
$count=count($mode);
// echo $type." ".$circuit." ".$mode;
    ?>
<h1>Race Submitted!</h1>
<p>You will have a 
<?php echo $type;?> 
race at <?php echo $circuit;?> 
with <?php echo $count;?> session<?php if($count>1){echo "s";}else{}?> including 
<?php
foreach($mode as $m){
    $sessions=$sessions.$m.", ";
}
// $sessions=rtrim($sessions,", ");
echo $sessions;
?>
</p>
    <?php
}
?>