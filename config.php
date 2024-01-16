<?php
    define('HOST', '127.0.0.1');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'sislogin');

    $conn = mysqli_connect(HOST, USER, PASS, BASE) or die ('Não foi possível conectar!');
?>