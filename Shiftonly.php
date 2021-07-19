<?php
$n = fgets(STDIN);
$array = explode(" ",fgets(STDIN));
$cnt = 0;
$b = true;
while($b == true){
    for($i =0; $i < $n; $i++){
        if($array[$i]%2 == 1){
            $b = false;
            break;
        }
        $array[$i] /= 2;
    }
    if($b == true){
        $cnt++;
    }
}

print $cnt;
?>
