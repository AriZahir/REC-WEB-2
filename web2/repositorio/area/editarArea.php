<?php
try{
    $conexao = new PDO("mysql:host=localhost; dbname=projweb","root","");
}catch(PDOException $e){
    die("Ocorreu um erro inesperado " . $e->getMessage());
}

$idArea = $_POST['idArea'];
$nome = $_POST['nome'];

try{
    $sql = "update area set nomeArea='$nome' where idArea=".$idArea;
    $conexao->exec($sql);
    echo "Editado com sucesso !!!";
}catch(PDOException $e){
    die("Ocorreu um erro " . $e->getMessage());
}

header('Location: ../../view/area/buscarArea.php');
?>