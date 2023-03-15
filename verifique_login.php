<?php
    $_num1 = $_POST ["num1"];
    $_num2 = $_POST ["num2"];
    $_op = $_POST ["operador"];
    
if ($_op == "+"){
    $_soma = ($_num1 + $_num2);
    echo("A Soma entre".$_soma);
}

if ($_op == "-"){
    $_subtracao = ($_num1 - $_num2);
    echo ("A Subtracao entre ".$_num1." e ".$_num2." é igual a: ".$_soma)
}

if($_op == "*"){
    $_multiplicacao = ($_num1 * $_num2);
    echo ("A multiplicação entre ".$_num1." e ".$_num2." é igual a: ".$_multiplicacao);
}

if ($_op == "/"){
    $_div = ($num1 / $num2);
    echo("A divisão entre ".$_num1." e ".$_num2." é igual a: ".$_div);
}

if ($_op == "media"){
    $_media == ($_num1 + $_num2)/2;
    echo ("A sua media entre ".$_num1." e ".$_num2." é igual a: ".$_media)
}
?>