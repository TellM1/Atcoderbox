<?php
    // $lange = L;
    // $cutpoint = N;
    
    # 入力形式
    // N L
    // K
    // A[1] A[2] A[3] ... A[N]

    // ----------

    // # 入力例 1
    // 7 45
    // 2
    // 7 11 16 20 28 34 38
    $input=explode(" ",fgets(STDIN));//入力を分割
    $c = $input[0];//切り込みの個数
    $l = $input[1];//全体の長さ
    $k = str_replace(PHP_EOL,"",fgets(STDIN));//選択する個数
    $a = explode(" ",fgets(STDIN));//切り分ける間隔　配列格納

    function cancut($min){
        global $c;
        global $l;
        global $k;
        global $a;

        $ml = 0;//左端を定義
        
        $count_p = $k;
        //最小のMで切れるか
        for($i=0; $i<$c; $i++){//切り込みの数以下で
            if($a[$i]-$left >= $min){//$a[$i]　==>> 切り分ける間隔
                $ml = $a[$i];//はじの位置を切った位置に設定
                $count_p = $count_p-1;//取り出す個数を調整
            }
            if($count_p == 0){//取り出す個数が0になったら
                if($l - $a[$i] < $min){//最後のカットサイズが最小より小さいか否か
                    return false;
                }else{
                    return true;
                }
            }    
        }
    }

    function serch(){
        global $c;
        global $l;
        global $a;
        // ////////
    }




    ?>