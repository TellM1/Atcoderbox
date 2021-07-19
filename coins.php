<?php
$a = fgets(STDIN);
$b = fgets(STDIN);
$c = fgets(STDIN);
$x = fgets(STDIN);
$cnt = 0;
for($ia = 0; $ia <= $a; $ia++){
    for($ib = 0;$ib <= $b;$ib++){
        for($ic = 0;$ic <= $c;$ic++){
            if($x == 500*$ia + 100*$ib + 50*$ic){
                $cnt++;
            };//合計金額
        }
    }
}
echo $cnt;
?>