<?php
include("config.php");
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        $tipo = $_POST["tipo"];
        $data_nasc = $_POST["data_nasc"];

        $sql = "INSERT INTO usuarios (nome, email, usuario, tipo, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$usuario}', '{$tipo}', '" . md5($senha) . "', '{$data_nasc}')";
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Usuário cadastrado com sucesso! Faça login novamente.');</script>";
            print "<script>location.href='index.php';</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar! Faça login novamente.');</script>";
            print "<script>location.href='index.php';</script>";
        }

        break;
    case 'editar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        $tipo = $_POST["tipo"];
        $data_nasc = $_POST["data_nasc"];

        $sql = "UPDATE usuarios SET
            nome='{$nome}',
            email='{$email}',
            usuario='{$usuario}',
            senha='" . md5($senha) . "',
            tipo='{$tipo}',
            data_nasc='{$data_nasc}' WHERE id=" . $_REQUEST["id"] . "";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Usuário editado com sucesso! Faça login novamente.');</script>";
            print "<script>location.href='index.php';</script>";
        } else {
            print "<script>alert('Não foi possível editar! Faça login novamente.');</script>";
            print "<script>location.href='index.php';</script>";
        }

        break;
    case 'excluir':
        $sql = "DELETE FROM usuarios WHERE id=" . $_REQUEST["id"] . "";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Usuário excluído com sucesso! Faça login novamente.');</script>";
            print "<script>location.href='index.php';</script>";
        } else {
            print "<script>alert('Não foi possível excluir! Faça login novamente');</script>";
            print "<script>location.href='index.php';</script>";
        }

        break;
}
