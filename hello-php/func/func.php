<h5>Before <?php test();?></h5>
<?php
function test(){
    echo "kimi test";
}
function test2(){
    echo "<a href=\"#\">TestLink</a>";
}
?>
<h1>Test <?php test();?></h1>
<?php test2();?>
<hr>
<h1>Notice the function inside a IF statement.</h1>
<?php
$test=false;
if($test){
    function insideFunc(){
        echo "This is Insider!";
    }
}
?>
<hr>
<?php
insideFunc();
?>