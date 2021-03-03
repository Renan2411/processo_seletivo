<?php
    $array = array(1, 2, 5, 5, 5);

    function sequenciaCrescente($array){
        $i = 0;
        $x = '';

        for($j = 1; $j < count($array)-1; $j++){
            if($array[0] != $array[$j+1]){
                $x = '';
                break;
            }else{
                $x='true';
            }
        }
       
        while(($x != 'true') && ($i <= count($array))){
            $x = '';
            $ver = $array;

            for($j = $i; $j < (count($array)-1); $j++ ){
                $aux = $ver[$j+1];
                $ver[$j+1] =  $ver[$j];
                $ver[$j] = $aux;
           }

           for($j = 1; $j <= (count($array)-2); $j++){
               if($ver[$j] <= $ver[$j-1]){
                   $x = 'false';
               }
           }
           $i++;

           if($x == ''){
               $x = 'true';
           }

        }

        for($j=0; $j< count($array); $j++){
            echo '['.$array[$j].'] ';
        }
      echo $x;

        

    }

    sequenciaCrescente($array);


?>