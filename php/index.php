<?php

include "infra/conexao.php";

$livros = mysqli_query($conexao, "SELECT * FROM livros");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Livraria</title>
</head>

<body>

    <h1>Livraria</h1>

    <a href="public/cadastrar.html">Cadastrar Livro</a>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Ano</th>
            <th>Ações</th>
        </tr>

        <?php while ($livro = mysqli_fetch_assoc($livros)) { ?>

            <tr>
                <td><?= $livro["id"] ?></td>
                <td><?= $livro["titulo"] ?></td>
                <td><?= $livro["autor"] ?></td>
                <td><?= $livro["ano"] ?></td>

                <td>
                    <a href="public/editar.php?id=<?= $livro["id"] ?>">
                        Editar
                    </a>

                    <a href="public/excluir.php?id=<?= $livro["id"] ?>">
                        Excluir
                    </a>
                </td>
            </tr>

        <?php } ?>

    </table>

</body>

</html>