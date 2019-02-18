<h1>STATIC VARIABLE</h1>
<?php
function nonStatic(){
    $c=0;
    $c+=2;
    echo $c." ";
}
for($i=0;$i<10;$i++){
    nonStatic();
}
?>
<hr>
<?php
function staticVar(){
    static $c=0;
    $c+=2;
    echo $c." ";
}
for($i=0;$i<10;$i++){
    staticVar();
}
?>