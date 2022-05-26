<?php

function trocaJogador($jogador){
    if($jogador == 1)
        return ++$jogador;
    else if($jogador == 2)
        return --$jogador;
}

?>