<?php
session_start();
?>
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
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h3>Editar Usuário</h3>
                        </div>
                        <?php
                        include("config.php");
                        $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
                        $res = $conn->query($sql);
                        $row = $res->fetch_object();
                        ?>
                        <div class="card-body">
                            <form action="cadastrar.php" method="POST">
                                <input type="hidden" name="acao" value="editar">
                                <input type="hidden" name="id" value="<?php print $row->id; ?>">
                                <div class="mb-3">
                                    <label>Nome</label>
                                    <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
                                </div>
                                <div class="mb3">
                                    <label>E-mail</label>
                                    <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control">
                                </div>
                                <div class="mb3">
                                    <label>Usuário</label>
                                    <input type="text" name="usuario" value="<?php print $row->usuario; ?>" class="form-control">
                                </div>
                                <div class="mb3">
                                    <label>Tipo</label>
                                    <input type="number" name="tipo" value="<?php print $row->tipo; ?>" class="form-control">
                                </div>
                                <div class="mb3">
                                    <label>Senha</label>
                                    <input type="password" name="senha" class="form-control" required>
                                </div>
                                <div class="mb3">
                                    <label>Data Nascimento</label>
                                    <input type="date" name="data_nasc" value="<?php print $row->data_nasc; ?>" class="form-control">
                                </div>
                                <div class="mb3">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                                <div class="mb-4">
                                    <a href="index.php" class="link-primary">Voltar para a tela de login</a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>