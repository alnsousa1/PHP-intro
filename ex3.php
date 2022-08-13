<?php
    $nome = $_POST["nome"] ?? null;
    $salario = $_POST["salario"] ?? null;
    $desconto = $_POST["desconto"] ?? null;

    function mensagem($texto) {
        echo "<script>alert('{$texto}');history.back();</script>";
        exit;
    }

    function calcularSalario($nome,$salario,$desconto){
        $valorDesconto = $salario * $desconto / 100;
        $valorSalario = $salario - $valorDesconto;

        $salario = number_format($salario, 2, ",", ".");
        $valorDesconto = number_format($valorDesconto, 2, ",", ".");
        $valorSalario = number_format($valorSalario, 2, ",", ".");

        echo "<p>O nome é: {$nome} <br> O salário é {$salario} <br> O desconto é {$valorDesconto}<br> O valor líquido é {$valorSalario}</p>";
    }

    if(empty($nome) ){
        mensagem("Preencha o campo nome!");
    } else if (empty($salario)) {
        mensagem("Preencha o salário!");
    } else if (empty ($desconto) ){
        mensagem("Preencha o desconto!");
    }

    calcularSalario($nome, $salario, $desconto);

    require "form3.php";