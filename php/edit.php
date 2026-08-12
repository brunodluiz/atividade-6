<?php

include "../infra/conexao.php";

$id = $_GET["id"];

$sql = "SELECT * FROM livros WHERE id = ?";

$stmt = $conexao->prepare($sql);

$stmt->bind_param("i", $id);

$stmt->execute();

$resultado = $stmt->get_result();

$livro = $resultado->fetch_assoc();

$stmt->close();

?>