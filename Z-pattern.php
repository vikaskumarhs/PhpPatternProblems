<?php
    $num = 5;
    for($i=0;$i<$num;$i++){
        for($j=0;$j<$num;$j++){
            if($i==0 || $i==$num-1 || $j == $num-($i+1)){
                print("*");
            }else{
                print(" ");
            }
        }
        print("\n");
    }

?>