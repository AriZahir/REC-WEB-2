<?php
try{
    $conexao = new PDO("mysql:host=localhost; dbname=projweb","root","");
}catch(PDOException $e){
    die("Ocorreu um erro inesperado " . $e->getMessage());
}

$nome = $_POST['nome'];
$cep = $_POST['cep'];

try{
    $sql = "insert into campus (CEP, nomeCampus) values ('$cep','$nome')";
    $conexao->exec($sql);
    echo "Salvo com sucesso !!!";
}catch(PDOException $e){
    die("Ocorreu um erro " . $e->getMessage());
}

header('Location: ../../view/campus/buscarCampus.php');

?>