<?php 
    include("conexao.php");

    $_nome = $_POST["nome"];
    $_telefone = $_POST["telefone"];
    $_email = $_POST["email"];
    $_endereco = $_POST["endereco"];
    $_sexo = $_POST["sexo"];
    $_login = $_POST["login"];
    $_senha = $_POST["senha"];

    $_sql = "insert into tabela_usuario2 (id,nome,telefone,email,endereco,sexo,login,senha)
     value 
    ('','$_nome', '$_telefone', '$_email','$_endereco', '$_sexo', '$_login', '$_senha');";

    // echo($_sql);
    
    mysqli_query ( $_conexao, $_sql) or die (mysqli_error());
    
    echo("Cadastro enviado com sucesso!");

    header("Refresh: 5;url=index.php");





?>