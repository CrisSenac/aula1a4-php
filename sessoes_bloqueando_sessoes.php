<?php
    session_start();
    if($_SESSION["nome"] != "master"){
    session_destroy();
    header("location:session_bloqueando_paginas.php")
}