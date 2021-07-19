<?php
$num = 0;
$sum = 0;
$z = 0;
fscanf(STDIN,"%d %d", $num, $sum);
// xがNを満たすならばループを抜ける
// x+yがNを満たすならばルループを抜ける
// 前提としてのx+y+z=が成り立つのであれば
// z = $num - x -yが成り立つのではないか
// 
for ($x = 0; $x <= $num; $x++){
    for ($y = 0; $x + $y <= $num; $y++){
        $z = $num - $x - $y;
        if ( ((10000 * $x) + (5000 * $y) + (1000 * $z)) == $sum){
            echo $x." ".$y." ".$z;
            exit;
        }   
    }
}
echo -1 ." " .-1 ." " .-1;




// if(10000 <= $sum && $num != 0){
//     $cntX = floor($sum/10000);
//     $sum -= (10000*$cntX);
//     $num -= $cntX; 
// }
// if(5000 <= $sum && $num != 0){
//     $cntY = floor($sum/5000);
//     $sum -= (5000*$cntY);
//     $num -= $cntY; 
// }
// if(1000 <= $sum && $num != 0){
//     $cntZ = floor($sum/1000);
//     $sum -= (1000*$cntZ);
//     $num -= $cntZ; 
// }
// if($num == 0 && $sum != 0){
//     $cntX = -1;
//     $cntY = -1;
//     $cntZ = -1;
// }

?>

