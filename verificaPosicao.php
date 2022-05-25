<?php

function verificaPosicao($tabuleiro = array(), $posicao, $simbolo){
    
    if($tabuleiro[$posicao] == '-'){
        $tabuleiro[$posicao] = $simbolo;
        return true;
    } 
    else return false;
    
}

?>