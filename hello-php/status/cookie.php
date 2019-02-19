<script type="text/javascript">
	function test(){
		<?php
		echo "alert('kimi');";
		?>
	}

 	function getCookie(){
		var coo;
		<?php //setcookie("name","kimi");?>
		coo=<?php echo $_COOKIE["name"];?>;
 		alert('coo='+coo);
 	}
</script>
<button onclick="test()">TEST</button>
<hr>
<button onclick="getCookie()">Get Cookie</button>
<?php
//setcookie("name","kimi");
if(isset($_COOKIE["name"])){
    echo "coo~";
    echo "";
}else{
    echo "koo!";
}
?>