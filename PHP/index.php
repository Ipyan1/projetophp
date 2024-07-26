<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cálculos <h1>
    <form method="Post">
        <?php
            include "funcoes.php";//Conectando com arquivo de funções
        ?>

        <label>Primeiro Número: </label>
        <input type="number" id="num1" name="num1"/><br><br>

        <label>Segundo Número: </label>
        <input type="number" id="num2" name="num2"/><br><br>

        <label>Terceiro Número: </label>
        <input type="number" id="num3" name="num3"/><br><br>

        <label>Quarto Número: </label>
        <input type="number" id="num4" name="num4"/><br><br>

        <label>Quinto Número: </label>
        <input type="number" id="num5" name="num5"/><br><br>

        <label>Digite uma palavra: </label>
        <input type="string" id="string" name="string"/><br><br>


        <button> Calcular
            <?php
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $num3 = $_POST["num3"];
                $num4 = $_POST["num4"];
                $num5 = $_POST["num5"];
                $string=$_POST["string"];
            ?>                    
        </button><br><br>

        <textArea rows="100" cols="40" readOnly>
            <?php
                echo "\nSomar: ".somar($num1,$num2).
                "\nSubtrair: ".subtrair($num1,$num2).
                "\nDividir: ".dividir($num1,$num2).
                "\nMultiplicar: ".multiplicar($num1,$num2).
                "\nEscolher: ".escolher($num1).
                "\nDecimal -> Binário: ".converterBinario($num1).
                "\nDecimal -> Binário: ".converterBinario($num2).
                "\nDecimal -> Hexadecimal: ".converterDecimalHexa($num1).
                "\nDecimal -> Hexadecimal: ".converterDecimalHexa($num2).
                "\nEx02-> Impar ou Par: ".imparPar($num1).
                "\nEx03-> Maior ou Menor: ".maiorMenor($num1,$num2).
                "\nEx04-> Dobro do número é: ".dobro($num1).
                "\nEx05-> Celsius para Fahrenheit é: ".conversaoCf($num1,$num2).
                "\nEx06-> O maior deles é: ".maior($num1,$num2,$num3).
                "\nEx07-> O número é: ".pzn($num1).
                "\nEx08-> A tabuada é: ".tabuada($num1).
                "\nEx09-> A soma dos numeros é: ".somaNumeros($num1).
                "\nEx10-> O número é: ".primo($num1).
                "\nEx11-> A palavra é: ".palindrome($string).
                "\nEx12-> O fatorial é: ".fatorial($num1,$num2).
                "\nEx13-> Os números pares são: ".pares($num1).
                "\nEx14-> O total de vogais é: ".vogais($string).
                "\nEx15-> Primos menores são: ".primosMenores($num1).
                "\nEx16-> O número é uma: ".data($num1, $num2, $num3).
                "\nEx17-> Média é: ".media($num1,$num2,$num3,$num4,$num5).
                "\nEx18-> Divisores são: ".divisores($num1);



                
                
                
            ?>
        </textArea>
    </form>
</body>
</html>
                