<h1>Hello Form</h1>
<form action="hello_form.php" method="post">
	Team: <input type="text" name="team" value="McLaren"><br>
	Rank: <input type="number" name="rank" value="4"><br>
	Code: <input type="password" name="code" value="fom"><br>
	<input type="submit" value="OK">
</form>
<?php
$t=$_POST["team"];
echo $t;
echo $_POST["rank"];
echo $_POST["code"];
?>