<?php
function func1(){
    global $a;
}

function func2(){
    $a=555;
    echo "func2 \$a=".$a;
}
func2();
?>
<hr>
<?php
echo $a;
?>
<hr>
<?php
function func3(){
    global $b;
    $b=777;
}

echo $b;
?>