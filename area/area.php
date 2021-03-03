<?php 
    $area = $_GET['narea'];

    function calculaArea($area){
        $quad = pow($area, 2) + pow(($area-1), 2);

        echo 'N '.$area. ' = ' .$quad;
    }

    calculaArea($area);
?>