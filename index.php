<?php

require_once("imprimeTabuleiro.php");
require_once("maquinaJoga.php");
require_once("verificaTabuleiro.php");
require_once("verificaPosicao.php");

for($play = 1; $play == 1;){

    //dados do jogador
    $player = readline("Digite o seu nick: ");
    for($i = 0; $i == 0;){
        $simbolo = readline("Escolha seu simbolo (X ou O): ");
        if($simbolo == 'x' || $simbolo == 'X'){
            $i = 1;
            $simbolo_maquina = 'O';
        } else if ($simbolo == 'o' || $simbolo == 'O'){
            $i = 1;
            $simbolo_maquina = 'X';
        }
    }

    //criação do tabuleiro
    $tabuleiro = array(
        '-','-','-',
        '-','-','-',
        '-','-','-'
    );

    //escolha do primeiro a jogar
    for($i = 0; $i == 0;){
        $start = readline("Digite 1 para ". ucfirst($player) . " começar e 2 para a Maquina começar: ");
        if($simbolo == '1' || $simbolo == '2')
            $i = 1;
    }

    //primeira jogada da maquina caso ela comece
    if($start == 2){
        for($verifica=false; $verifica == true;){
            $verifica = verificaPosicao($tabuleiro, maquinaJoga(), $simbolo_maquina);
        }
    }
    
    //loop do game
    for($ganhador=0; $ganhador === 0;){

        imprimeTabuleiro($tabuleiro);

        for($verifica=false; $verifica == true;){
            $action = readline(ucfirst($player) . " escolha uma posição: ");
            $verifica = verificaPosicao($tabuleiro, $action, $simbolo);
        }

    }



}

?>