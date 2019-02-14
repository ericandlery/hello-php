<?php
function movement($policyId){
    movementPolicy("AO".$policyId);
}

function movementPolicy($policyCode){
    echo "正在處理".$policyCode."保單";
    if(isNewPolicy($policyCode)){
        echo "New Policy, new income!";
    }else{
        echo "Get more policies!";
    }
}

function isNewPolicy($policyCode){
    if(substr($policyCode,2)>5000){
        return true;
    }else{
        return false;
    }
}
?>
<h1>Function Test</h1>
<?php
movement(5555);
echo "<br>";
echo gettype($n="kimi");
echo gettype($n=0.55);
echo gettype($n=true);
echo gettype($n=null);
?>