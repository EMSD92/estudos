<?php
    session_start();

    $ano = $_SESSION["anoatual"];

    if( ($ano % 4) == 0 && ($ano % 100) >0 || (ano %400) == 0){
        echo "Este ano é bisexto";

    }else{
        echo "Este ano não é bisexto";
        unset($_SESSION["anoatual"]);
    }
?>