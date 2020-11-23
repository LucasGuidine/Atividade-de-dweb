<?php
    $contatos=array("Henrique"=>"1 2345-6780", "Guilherme"=>"1 2345-6781", "Lucca"=>"1 2345-6782", "Édson"=>"1 2345-6783", "Ayres"=>"1 2345-6784", "Ana"=>"1 2345-6785");
    
    foreach($contatos as $nome => $numero){
        echo $nome.": ".$numero."<br>";
    }
?>