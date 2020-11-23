<?php
    function Maior_E_Menor ($numeros){
        $maior=$numeros[0];
        $menor=$numeros[0];
        foreach($numeros as $elemento){
            if($elemento>$maior){
                $maior=$elemento;
            }else if($elemento<$menor){
                $menor=$elemento;
            }
        }
        echo "Maior: $maior<br>Menor: $menor";
    }
    
    $numeros=array(13,24,3,1,100);
    Maior_E_Menor($numeros);
?>