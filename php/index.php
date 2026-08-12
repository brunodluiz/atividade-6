<?php

include "../infra/conexao.php";

$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$ano = $_POST["ano"];

$stmt = $conexao->prepare(
    "INSERT INTO livros (titulo, autor, ano)
     VALUES (?, ?, ?)"
);

$stmt->bind_param("ssi", $titulo, $autor, $ano);

$stmt->execute();

$stmt->close();

header("Location: ../index.php");

?>