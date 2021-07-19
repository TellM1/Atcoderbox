<?php
$n = fgets(STDIN);
$num = explode(' ', trim(fgets(STDIN)));
rsort($num);
$cnt = 0;
for($i = 0; $i < $n; $i++){
    if(($i%2) == 0){
        $cnt+=$num[$i];
    }else{
        $cnt-=$num[$i];
    }
}
echo $cnt;
?>