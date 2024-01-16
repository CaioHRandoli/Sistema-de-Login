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
    <div class="background-image">
        <div class="snow">
        </div>
        <div class="login">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 offset-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h3>Acesso ao Sistema</h3>
                            </div>
                            <?php
                            if (isset($_SESSION['nao_autenticado'])) :
                            ?>
                            <div class="alert-danger">
                                <h5>Erro: usuário e/ou senha incorreto(s)!</h5>
                            </div>
                            <?php
                            endif;
                            unset($_SESSION['nao_autenticado']);
                            ?>
                            <div class="card-body">
                                <form action="login.php" method="POST">
                                    <div>
                                        <div class="mb-3">
                                            <label>Usuário</label>
                                            <input type="text" name="usuario" class="form-control" placeholder="digite seu usuário">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="mb-3">
                                            <label>Senha</label>
                                            <input type="password" name="senha" class="form-control" placeholder="digite sua senha">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-body">
                                <form action="cadastrar.php" method="POST">
                                    <div class="mb-4">
                                        <a href="cadastro.php" class="link-primary">Não é cadastrado? Clique para criar uma conta</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>