<?php
try{
    $conexao = new PDO("mysql:host=localhost; dbname=projetoweb02","root","");
}catch(PDOException $e){
    die("Ocorreu um erro inesperado " . $e->getMessage());
}

$nome = $_POST['nome'];

try{
    $sql = "insert into area (nomeArera) values ('$nome')";
    $conexao->exec($sql);
    echo "Salvo com sucesso !!!";
}catch(PDOException $e){
    die("Ocorreu um erro " . $e->getMessage());
}

?>