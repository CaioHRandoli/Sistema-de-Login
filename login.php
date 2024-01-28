<?php
session_start();

if (empty($_POST) or (empty($_POST["usuario"]) or (empty($_POST["senha"])))) {
    print"<script>location.href='index.php';</script>";
}

include('config.php');

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM usuarios WHERE usuario = '{$usuario}' and senha = '".md5($senha)."'";
$res = $conn->query($sql) or die($conn->error);
$row = $res->fetch_object();
$qtd = $res->num_rows;

if ($qtd > 0) {
    $_SESSION["usuario"] = $row->$usuario;
    $_SESSION["senha"] = $row->$senha;
    $_SESSION["nome"] = $row->nome;
    print"<script>location.href='dashboard.php';</script>";
} else {
    print"<script>alert('Usuário e/ou senha incorreto(s)');</script>";
    print"<script>location.href='index.php';</script>";
}
?>