<?php
    $nome = $_GET["nome"] ?? null;
    $idade = $_GET["idade"] ?? null;

    if(empty($nome) ){
        echo "<p>O nome está vazio</p>";
        exit;
    } else if (empty($idade) ) {
        echo "<script>alert('A idade está vazia!'); history.back();</script>";
        exit;
    }

    echo "<p>O nome digitado é: {$nome}</p>";
    echo "<p>A idade digitada é: {$idade}</p>";

    include "form2.php";