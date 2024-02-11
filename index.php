<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login </title>
<<<<<<< HEAD
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
=======
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
>>>>>>> 8448505 (update)
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
                            <div class="card-body">
                                <form action="login.php" method="POST">
                                    <div>
                                        <div class="mb-3">
                                            <label>Usuário</label>
<<<<<<< HEAD
                                            <input type="text" name="usuario" placeholder="digite o usuário" class="form-control">
=======
                                            <input type="text" name="usuario" class="form-control" placeholder="Informe seu usuário">
>>>>>>> 8448505 (update)
                                        </div>
                                    </div>
                                    <div>
                                        <div class="mb-3">
                                            <label>Senha</label>
<<<<<<< HEAD
                                            <input type="password" name="senha" placeholder="digite a senha" class="form-control">
=======
                                            <input type="password" name="senha" class="form-control" placeholder="Digite sua senha">
>>>>>>> 8448505 (update)
                                        </div>
                                    </div>
                                    <div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </div>
                                    </div>
                                </form>
                                <form>
                                    <div class="mb-4">
<<<<<<< HEAD
                                        <a href="cadastro.php" class="link-primary">Não é cadastrado? Clique para criar uma conta</a>
=======
                                        <a href="novo-usuario.php" class="link-primary">Não é cadastrado? Clique para criar uma conta</a>
>>>>>>> 8448505 (update)
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

<<<<<<< HEAD

=======
>>>>>>> 8448505 (update)
</html>