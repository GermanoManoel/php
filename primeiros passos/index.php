<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo PHP</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>  
    <div>
        <h1> Calculadora</h1>
            <form action="verifique_login.php" method="POST">
                <ul>
                    <li><input class="formulario" type="text" name="num1" value="" placeholder="1º Número:"></li>
                        <li><input class="formulario" type="password" name="num2" value="" placeholder="2º Número:"></li>
                            <li class="opera">
                                <input class="rad" type="radio" name="operador" value="+">
                                    <label> + </label>
                                <input class="rad" type="radio" name="operador" value="-">
                                    <label> - </label>
                                <input class="rad" type="radio" name="operador" value="*">
                                    <label> * </label>
                                <input class="rad" type="radio" name="operador" value="/">
                                    <label> / </label>
                                <input class="rad" type="radio" name="operador" value="media">
                                    <label> media </label>
                            </li>

                            <li><input id="butao" type="submit" name="calcular" value="Calcular"></li>
                </ul>
            </form>
    </div>
</body>
</html>