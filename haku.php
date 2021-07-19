<?php 
$s = trim(fgets(STDIN));
$w =['eraser','erase','dreamer','dream'];
rsort($w,SORT_STRING);
$s=str_replace($w, '', $s);
if($s === ''){
    echo 'YES';
}else{
    echo 'NO';
}
?>