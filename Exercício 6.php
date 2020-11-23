<?php
    function Verifica_Se_E_Triangulo ($a, $b, $c){
        echo "O triangulo com os valores ".$a. ", ".$b. " e ".$c. " ";
        if( (abs($b-$c)<$a && $a<$b+$c) && (abs($a-$c)<$b && $b<$a+$c) && (abs($a-$b)<$c && $c<$a+$b)){
            echo "E triangulo";
        }else{
            echo "Nao e triangulo";
        }
        echo "<br>";
    }
    
    Verifica_Se_E_Triangulo(5,9,10);
    Verifica_Se_E_Triangulo(1,9,17);
?>