<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shortcut icon" href="imagem/favicon.ico" type="image/x-icon">

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>
   

    <script>
    $(document).ready(function(){
        $('input[name="telefone"]').mask('(00)0000-0000');
        $('input[name="senha"]').mask('***-****');
    });
    
    </script>
</head>
<body>
    <h1>Formulário</h1>
    <div class="caixa">
        <form action="cadastro.php" method="POST">
            <div class="partes">
                <label for="inome">Nome</label><br>
                    <input class="info" type="text" placeholder="Nome" name="nome" id="nome">
            </div>
            <div class="partes">
                <label for="itel">Telefone</label><br>
                    <input class="info" type="text" placeholder="Telefone" name="telefone" id="telefone">
            </div>
            <div class="partes">
                <label for="iema">E-mail</label><br>
                    <input class="info"  type="email" placeholder="E-mail" name="email" id="email">
            </div>
            <div class="partes">
                <label for="ien">Endereço</label><br>
                    <input class="info"  type="text" placeholder="Endereço" name="endereco" id="endereco">
            </div>
            <h3>Sexo:</h3>
            <div class="parte-diferente">
                    <div class="parte-masculino">
                        <label for="imasc">Masculino</label>
                            <input class="info2" type="radio" name="sexo" value="masculino" id="imasc">
                    </div>
                    <div class="parte-feminino">
                        <label for="ifem">Feminino</label>
                            <input class="info2" type="radio" name="sexo" value="Feminino" id="ifem">
                    </div>
            </div>
            <div class="partes">
                <label for="">Login</label><br>
                    <input class="info"  type="text" placeholder="Login" name="login" id="login">
            </div>
            <div class="partes">
                <label for="">Senha</label><br>
                    <input class="info"  type="text" placeholder="Senha" name="senha" id="senha">
            </div>
            <div class="partes">
                <input class="butao" type="submit" value="Cadastro">
            </div>
        </form>
    </div>
</body>
</html>