<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Lista de Usuários</h1>
        <?php
        include("config.php");

        $sql = "SELECT * FROM usuarios";
        $res = $conn->query($sql);
        $qtd = $res->num_rows;

        if ($qtd > 0) {
            print "<table class='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th>ID</th>";
            print "<th>Nome</th>";
            print "<th>E-mail</th>";
            print "<th>Usuário</th>";
            print "<th>Tipo Conta</th>";
            print "<th>Data de Nascimento</th>";
            print "<th>Ações</th>";
            print "</tr>";
            while ($row = $res->fetch_object()) {
                print "<tr>";
                print "<td>" . $row->id . "</td>";
                print "<td>" . $row->nome . "</td>";
                print "<td>" . $row->email . "</td>";
                print "<td>" . $row->usuario . "</td>";
                print "<td>" . $row->tipo . "</td>";
                print "<td>" . $row->data_nasc . "</td>";
                print "<td>
                    <button onclick=\"location.href='editar-usuario.php?id=" . $row->id . "'\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='cadastrar.php?id=" . $row->id . "&acao=excluir'}else{false;}\" class='btn btn-danger'>Excluir</button>    
                </td>";
                print "</tr>";
            }
            print "</table>";
        } else {
            print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
        }
        ?>
        <div class="mb-4">
            <a href="dashboard.php" class="link-primary">Voltar para a tela de menu</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>