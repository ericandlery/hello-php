<?php
$a=555;
$b=777;

function func1(){
    echo $a;
}
func1();
?>
<hr>
<?php
function func2(){
    global $a;
    echo "func2=".$a;
}
func2();
?>