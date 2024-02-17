<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h3>Cadastro de Usuário</h3>
                        </div>
                        <div class="card-body">
                            <form action="salvar-usuario.php" method="POST">
                                <input type="hidden" name="acao" value="cadastrar">
                                <div class="mb-3">
                                    <label>Nome</label>
                                    <input type="text" name="nome" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>E-mail</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Usuário</label>
                                    <input type="text" name="usuario" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Tipo</label>
                                    <input type="number" name="tipo" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Senha</label>
                                    <input type="password" name="senha" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Data Nascimento</label>
                                    <input type="date" name="data_nasc" class="form-control">
                                </div>
                                <div class="mb-3">
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