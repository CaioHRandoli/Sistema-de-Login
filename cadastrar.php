<?php
session_start();
include("config.php");

$nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conn, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conn, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from usuarios where usuario = '$usuario'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION['usuario_existe'] = true;
    header('Location: cadastro.php');
    exit();
}

$sql = "INSERT INTO usuarios(nome, usuario, senha, data_cadastro) VALUES('$nome', '$usuario', '$senha', NOW())";

if($conn->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

$conn->close();

header('Location: cadastro.php');
exit();
?>