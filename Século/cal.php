<?php 
    $ano = $_GET['ano'];

    function seculoAno($ano){
        $sec = $ano%100;

        if($ano <= 100){
            echo 'Ano ' .$ano. ' = século 1';
        }else if($sec == 0){
            echo 'Ano ' .$ano. ' = século ' .(intdiv($ano, 100));
        }else{
            echo 'Ano ' .$ano. ' = século ' .(intdiv($ano, 100) + 1);
        }
    }

    seculoAno($ano)


    
?>