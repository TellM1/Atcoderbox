<?php
// $nums = fgets(STDIN);
$a = 0;
$b = 0;
fscanf(STDIN,"%d %d",$a,$b);
if(($a*$b)%2 == 0){
    echo "Even";
}else if(($a*$b)%2 == 1){
    echo "Odd";
}
?>

