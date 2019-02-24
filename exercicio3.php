<?php

$soma=0;
    for ($i=0;$i<=30;$i++){
    $vetor=$i;
        if ($vetor<10){
            echo "Vetor 0".$vetor." = "."0".$i.". <br>";
        }else{
            echo "Vetor ".$vetor." = ".$i.". <br>";
        }
        $soma=$soma+$vetor;
    }
    echo "O maior número é: ".$vetor." na vetor: ".($i-1)."<br>";
    echo "A soma total é: ".$soma."<br>";
    echo "O valor da média é: ".($soma/30);
?>

