<?php

    $pal = $_GET['pal'];

    function palindromo($pal){
        $var = strrev($pal) == $pal;

        if($var){
            echo 'String ' .$pal. ' = true';
        }else{
            echo 'String ' .$pal. ' = false';
        }
    }

    palindromo($pal)


?>