<?php
$input=explode(" ",fgets(STDIN));
$n=$input[0];
$l=$input[1];
$k=str_replace(PHP_EOL,"",fgets(STDIN));
$a=explode(" ",fgets(STDIN));
//$start = microtime(true);

function check($M){
    global $n;
    global $k;
    global $a;
    global $l;
    $left=0;

    //最小Mで切れるか検証する
    //Mを超えたら切る
    $remain_cut=$k;
    for($i=0;$i<$n;$i++){
        if($a[$i]-$left>=$M){
            //切る
            $left=$a[$i];
            $remain_cut=$remain_cut-1;
        //     echo $i." ".$a[$i]." ".$remain_cut."\n";
        }
            if($remain_cut==0){
                //カット終了
                //最後のカットがM以下になっていないか調べる
                if($l-$a[$i]<$M){
                    return false;
                }else{
                    return true;
                }
            }
    }
}
//二分探索を使えば良い？
//intval(floor($l/($k+1)))の半分より上に解があるか？
//ある→さらにその半分より上に解があるか？
//ない→下半分の半分より上に解があるか？
function search(){
        global $a;
        global $n;
        global $l;
        $left=-1;
        $right=intval($l+1);
        while($right-$left>1){
                $mid=$left+intval(($right-$left)/2);
                // echo "mid ".$mid." right ".$right." left ".$left."\n";
                if(!check($mid)){
                        $right=$mid;
                }else{
                        $left=$mid;
                }
        }
        return $left;
}
echo(search());

// $end = microtime(true);
// echo "\n処理時間：" . ($end - $start) . "秒";
