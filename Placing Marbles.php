<?php
$nums = fgets(STDIN);
$ins = str_split($nums);
$cnt = 0;
if($ins[0] == 1){
    $cnt++;
}
if($ins[1] == 1){
    $cnt++;
}
if($ins[2] == 1){
    $cnt++;
}
echo $cnt;
?>

