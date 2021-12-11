<?php
function gerahash($qtd){
$caracteres = 'abcdefghijklmopqrstuvxwyz0123456789';
$quantidadecaracteres = strlen($caracteres);
$quantidadecaracteres--;
$hash=NULL;
    for($x=1;$x<=$qtd;$x++){
        $posicion = rand(0,$quantidadecaracteres);
        $hash .= substr($caracteres,$posicion,1);
    }
return $hash;
}
echo gerahash(128);
?>