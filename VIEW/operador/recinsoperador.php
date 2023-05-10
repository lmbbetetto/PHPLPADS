<?php
    include_once '../../MODEL/Operador.php';
    $operador = new \MODEL\Operador();

    $operador->setNome($_POST['txtNome']);
    $operador->setAniversario($_POST['txtAniversario']);
    $operador->setSalario($_POST['txtSalario']);

    echo "Nome: " . $operador->getNome() . '</br>';
    echo "Aniversario: {$operador->getAniversario()} </br>";
    echo "Salario: {$operador->getSalario()} </br>";
?>