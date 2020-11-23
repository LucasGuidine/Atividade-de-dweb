<?php
    function Efetua_Adicao($n1, $n2){
        $soma=$n1+$n2;
        if($soma>20){
            echo $soma + 8;
        }else{
            echo $soma - 5;
        }
    }

    Efetua_Adicao(48,12);
?>