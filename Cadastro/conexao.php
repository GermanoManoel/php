<?php
    define("host", "127.0.0.1");
    define("usuario", "root");
    define("senha", "");
    define("bd", "sistema_cadastro2");

    $_conexao = mysqli_connect(host,usuario,senha,bd)or die(mysqli_error());
?>