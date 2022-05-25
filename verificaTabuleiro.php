<?php

function verificaTabuleiro($tabuleiro = array(), $simbolo){
    if(
        ($tabuleiro[0] == $simbolo && $tabuleiro[1] == $simbolo && $tabuleiro[2] == $simbolo )||
        ($tabuleiro[3] == $simbolo && $tabuleiro[4] == $simbolo && $tabuleiro[5] == $simbolo )||
        ($tabuleiro[6] == $simbolo && $tabuleiro[7] == $simbolo && $tabuleiro[8] == $simbolo )||
        ($tabuleiro[0] == $simbolo && $tabuleiro[3] == $simbolo && $tabuleiro[6] == $simbolo )||
        ($tabuleiro[1] == $simbolo && $tabuleiro[4] == $simbolo && $tabuleiro[7] == $simbolo )||
        ($tabuleiro[2] == $simbolo && $tabuleiro[5] == $simbolo && $tabuleiro[8] == $simbolo )||
        ($tabuleiro[0] == $simbolo && $tabuleiro[4] == $simbolo && $tabuleiro[8] == $simbolo )||
        ($tabuleiro[6] == $simbolo && $tabuleiro[4] == $simbolo && $tabuleiro[2] == $simbolo )
    ){
        return 1;
    }

    return 0;

}

?>