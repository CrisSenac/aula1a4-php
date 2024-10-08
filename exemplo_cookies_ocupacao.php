<?php

    $value = 'aluno';

    setcookie ("ocupacao", $value);
    // expira no final da sessão (Quando o browser fechar)

    setcookie ("ocupacao", $value,time()+60); //expira em 1 minuto

    echo $_COOKIE["ocupacao"];
