<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro - PHP + MySQL - Canal TI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <div class="background">
            <div class="menu">
                <div class="coluna-menu">
                    <h3>Sistema de Cadastro</h3>
                    <?php
                    if (isset($_SESSION['status_cadastro'])) :
                    ?>
                        <div class="alert-success">
                            <p>Cadastro efetuado!</p>
                            <p>Faça login informando o seu usuário e senha <a href="login.php">aqui</a></p>
                        </div>
                    <?php
                    endif;
                    unset($_SESSION['status_cadastro']);
                    ?>
                    <?php
                    if (isset($_SESSION['usuario_existe'])) :
                    ?>
                        <div class="alert-warning">
                            <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
                        </div>
                    <?php
                    endif;
                    unset($_SESSION['usuario_existe']);
                    ?>
                    <div class="box">
                        <form action="cadastrar.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input" placeholder="nome" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" type="text" class="input" placeholder="usuário">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input" type="password" placeholder="senha">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-dark">Cadastrar</button>
                            <div class="mb-4">
                                <a href="index.php" class="link-primary">Para voltar a página de login, clique aqui</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>