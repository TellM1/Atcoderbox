<?php
fscanf(STDIN,"%d %d %d",$x,$a,$b);
$cnt = 0;
$sum = 0;
for($i = 0; $i <= $x; $i++){
        $sum = array_sum(str_split($i, 1));
    if($sum >= $a && $sum <= $b){
        $cnt += $i;
    }
}
echo $cnt; 
?>