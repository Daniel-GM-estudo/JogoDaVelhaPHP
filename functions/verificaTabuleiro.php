<?php

require_once("imprimeTabuleiro.php");

function verificaTabuleiro($tabuleiro = array(), $simbolo, $jogador){
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
        imprimeTabuleiro($tabuleiro);
        if($jogador == $simbolo) echo("PARABÉNS, você ganhou!");
        else echo("Sinto muito, você perdeu!");
        return 1;
    }

    return 0;

}

?>