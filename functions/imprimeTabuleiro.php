<?php

function imprimeTabuleiro($tabuleiro = array()){

        echo<<<EOL
            POSIÇÕES | TABULEIRO
                     |
              7|8|9  | $tabuleiro[6]|$tabuleiro[7]|$tabuleiro[8]
              4|5|6  | $tabuleiro[3]|$tabuleiro[4]|$tabuleiro[5]
              1|2|3  | $tabuleiro[0]|$tabuleiro[1]|$tabuleiro[2]

        EOL;

}

?>