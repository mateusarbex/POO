<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
    <title>Pessoas</title>
</head>

<body>
    <div class="container">
        <h1 class="row header">Pessoas</h1>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-3"></div>
            <div class="col-sm-3"></div>
        </div>
        <?php
        include 'pessoa.php';
        include 'banco.php';
        $pdo = Banco::conectar();
        $sql = 'SELECT * FROM pessoa ORDER BY nome ASC';
        foreach ($pdo->query($sql) as $row) {
            $pessoa = new Pessoa();
            $pessoa->setNome($row['nome']);
            $pessoa->setCpf($row['cpf']);
            $pessoa->setSexo($row['sexo']);
            $pessoa->setCor_da_pele($row['cor_da_pele']);
            echo '<div class="row field">';
            echo '<div class="col-sm-3 pessoa">' . '<p class="lead">' . $pessoa->getNome() . '</p>' . '</div>';
            echo '<div class="col-sm-2 pessoa">'  . '<p class="lead">' . $pessoa->getCpf() . '</p>' . '</div>';
            echo strcmp($pessoa->getSexo(), 'F') ? '<div class="col-sm-2 pessoa"><p class="lead">Masculino</p> </div>' : '<div class="col-sm-2 pessoa"><p class="lead">Feminino</p></div>';
            echo '<div class="col-sm-2 pessoa">'  . '<p class="lead">' . $pessoa->getCor_da_pele() . '</p>' . '</div>';
            echo '<div class="col-sm-1 pessoa"><a class="btn btn-primary" href="index.php?delete=' . $row['id'] . '">Deletar</a></div>';
            echo '</div>';
        }
        function delete($id, $pdo)
        {
            $sql =  'DELETE FROM pessoa WHERE id=' . $id;
            $p = $pdo->prepare($sql);
            $p->execute(array($id));
            header("Location: index.php");
        }
        if (isset($_GET['delete'])) {
            delete($_GET['delete'], $pdo);
        }
        Banco::desconectar();
        ?>
        <div class="row">
            <div class="col-sm">
                <a href="criar.php" class="btn btn-primary">Adicionar pessoa</a>
            </div>
        </div>
    </div>

</html>