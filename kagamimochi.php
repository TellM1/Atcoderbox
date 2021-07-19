<?php
$n = fgets(STDIN);
$num = [];
$cnt = 1;
for($i = 0; $i < $n; $i++){
    array_push($num,fgets(STDIN));
}
rsort($num); 
for($j = 0;$j < $n-1; $j++){
    if($num[$j] != $num[$j+1]){
        $cnt++;
    }    
}
echo $cnt;
?>

<!-- kinako_nのcode-->
<?php
$n = fgets(STDIN);
for ($i = 0; $i < $n; $i++) {
  $a[$i] = trim(fgets(STDIN));
}
echo count(array_unique($a));
?>