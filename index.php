<?php

require_once("imprimeTabuleiro.php");
require_once("maquinaJoga.php");
require_once("verificaTabuleiro.php");
require_once("verificaPosicao.php");
require_once("trocaJogador.php");

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
        if($start == '1' || $start == '2')
            $i = 1;
    }

    //primeira jogada da maquina caso ela comece
    if($start == 2){
        for($verifica=false; $verifica !== true;){
            $action = maquinaJoga();
            if($tabuleiro[$action-1] == "-"){
                $tabuleiro[$action-1] = $simbolo_maquina;
                $verifica = true;
            }
        }
        $start = trocaJogador($start);
    }
    
    
    //loop do game
    for($ganhador=0; $ganhador === 0;){

        imprimeTabuleiro($tabuleiro);

        for($verifica=false; $verifica !== true;){
            if($start == 1) {
                $action = readline(ucfirst($player) . " escolha uma posição: ");
                $simbolo_tabuleiro = $simbolo;
            }
            else if($start = 2){
                $action = maquinaJoga();
                $simbolo_tabuleiro = $simbolo_maquina;
            }
            if($tabuleiro[$action-1] == "-"){
                $tabuleiro[$action-1] = $simbolo_tabuleiro;
                $verifica = true;
            }
        }
        $ganhador = verificaTabuleiro($tabuleiro, $simbolo_tabuleiro, $simbolo);
        $start = trocaJogador($start);
    }
    
    $resposta = readline(" - Deseja jogar novamente? (s/n)");
    if($resposta == 'n'){
        $play = 0;
    }

}

?>