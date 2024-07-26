<?php
$num1 =0;
$num1 =3;


function somar($num1,$num2){
    return  $num1 + $num2;
}//fim do somar

function subtrair($num1,$num2){
    return  $num1 - $num2;
}//fim do subtrair

function multiplicar($num1,$num2){
    return  $num1 * $num2;
}//fim do multiplicar

function dividir($num1,$num2){
    if($num2 <= 0){
        return "Impossivel dividir por zero!";
    }else{
        return $num1 / $num2;
    }
}//fim do dividir

function escolher ($num1){
    switch ($num1){
        case 1:
            return "Rosa";
            break;
        case 2:
            return "Preto";
            break;
        case 3:
            return "White";
            break;
        
        default:
            return "Cor não identificada";
            break;
        
    }// fim do switch
}//fim do escolher

function converterbinario($decimal){
    $binario = "";
    while ($decimal >= 1){
        $binario .= $decimal % 2;
        $decimal = $decimal /2;
    }
    return strrev($binario);
}//fim do binario

function converterDecimal($binario){
    $tamanho = strlen ($binario);
    $j = $tamanho -1;
    $i = 0;
    $decimal =0;
    while( $i < $tamanho){
        if(substr($binario,$i,1) == "1"){
            $decimal += pow(2,$j);

        }
        $j --;
        $i++;
    }

    return $decimal;
}//fim da conversão decimal

function converterDecimalHexa($decimal){

$hexa = "";
$resto = 0;
    while($decimal >=1){
        $resto   = $decimal % 16;
        $decimal = $decimal / 16;

        switch($resto){
            case 10;
                $hexa .= "A";
                break;
            case 11;
                $hexa .= "B";
                break;
            case 12;
                $hexa .= "C";
                break;
            case 13;
                $hexa .= "D";
                break;
            case 14;
                $hexa .= "E";
                break;
            case 15;
                $hexa .= "F";
                break;
            default:
                $hexa .=$resto;
                break;
        }//fim do switch
    }//fim do while
            return strrev($hexa);
}// fim do metodo

function converterHexaDecimal($hexa){
    $tamanho = strlen($hexa) -1;
    $j = $tamanho;
    $i = 0;
    $num = 0;
    $decimal = 0;
    while($i < $tamanho){
        $num = substr($hexa, $i, 1);

        switch($num){
            case "A";
                $num = 10;
                break;
            case "B";
                $num = 11;
                break;
            case "C";
                $num = 12;
                break;
            case "D";
                $num = 13;
                break;
            case "E";
                $num = 14;
                break;
            case "F";
                $num = 15;
                break;    
        }

        $decimal += $num * pow(16,$j);
        $j--;
        $i++;
    }
    return $decimal;

}//fim do método

//Exercício 2: Faça um programa que peça um número e verifique se ele é par ou ímpar.

function imparPar($num1){
    if($num1 % 2 ==0){
        return "Par";
    }else{
        return "Impar";
    }
}//fim do método

//Exercício 3: Faça um programa que peça a idade do usuário e exiba uma mensagem indicando se ele é maior ou menor de idade. 

function maiorMenor($num1,$num2){
    if($num1 > $num2){
        return "Maior";
    }else{
        return "Menor";
    }
}//fim do método

//Exercício 4: Faça um programa que peça um número e exiba o dobro desse número.  

function dobro($num1){
    return $num1 * 2;
}//fim do método


//Exercício 5: Faça um programa que peça a temperatura em Celsius e a converta para Fahrenheit. 

function conversaoCf($num1,$num2){
    $num2 =9/5 * $num1;
    return $num2 + 32;
}//fim da conversão

//Exercício 6: Faça um programa que peça três números e exiba o maior deles.

function maior($num1,$num2,$num3){
    if ($num1 > $num2 && $num1 > $num3){
        return $num1;
    }else if ($num2 > $num1 && $num2 > $num3){
        return $num2;
    }else{
        return $num3;
    }    
}//fim do Maior

//Exercício 7: Faça um programa que peça um número e verifique se ele é positivo, zero ou negativo. 
function pzn($num1){
    if ($num1 > 0){
        return "Positivo";
    }else if($num1 == 0){
        return"Zero";
    }else{
        return "Negativo";
}
}//fim do pnz

//Exercício 8: Faça um programa que peça um número e exiba a tabuada desse número de 1 a 10.  

function tabuada($num1){
    $tabuada= "";
    
    for($i = 0;$i <= 10; $i++){
    $tabuada .= "\n$i * $num1 = ".($i * $num1);
    }//fim do for
         return $tabuada;
}//fim da tabuada

//Exercício 9: Faça um programa que peça um número e exiba a soma de todos os números de 1 até esse número. 

function somaNumeros($num1){
    $i = 1;
    $soma = 0;
    while($i < $num1 + 1){
        $soma = $soma + $i;
        $i++;
    }
    return $soma;
}//fim da somaDosnumeros
    
//Exercício 10: Faça um programa que peça um número e verifique se ele é um número primo.

function primo($num1){
   if($num1 <= -1){
        return "Não é primo";
    }else if ($num1 == 2 || $num1 == 3 && $num1 == 5 || $num1 == 7){
        return "Primo";
    }else if($num1 % 2 ==0 || $num1 % 3 == 0 || $num1 % 5 == 0 || $num1 % 7 == 0){
        return "NãoPrimo";
    }
}//fim do primo


//Exercício 11: Faça um programa que peça ao usuário para digitar uma palavra e verificar se essa palavra é um palíndromo.  

function palindrome($string){ 
    $original = "arara";
    if (strrev($string) == $string){ 
        return "É um Palindromo!"; 
    }else{
        return "Não é um Palíndromo";
    }
} //fim do Palindrome

//Exercício 12: Faça um programa que peça um número e calcule o fatorial desse número.  

function fatorial($num1,$num2){
    $num2 = $num1;
     while($num1 > 1){
        $num2 = $num2 * ($num1 - 1);
        $num1 -= 1;

        return $num2;
    }
}//fium do fatorial

//Exercício 13: Faça um programa que peça um número e exiba todos os números pares de 1 até esse número. 

function pares($num1){
    $pares = '';
    for ($num2 = 2; $num2 <= $num1; $num2 += 2){
        $pares .= "$num2 ";
    }
    return $pares;
}//Fim do 13

//Exercício 14: Faça um programa que peça uma palavra ao usuário e conte quantas vogais essa palavra possui.  

function vogais($palavra){
    $vogais = 0;
    $i = 0;
    $j = $tamanho;
    $letra = "";
    $tamanho = strlen($palavra) - 1;
    while($i < $tamanho){
        $letra = substr($palavra, $i, 1);
        switch($letra){
            case "a";
                $vogais += 1;
            case "A";
                $vogais += 1;
                break;
             case "e";
                $vogais += 1;
                break;
            case "E";
                $vogais += 1;
                break;
            case "i";
                $vogais += 1;
                break;
            case "I";
                $vogais += 1;
                break;
            case "o";
                $vogais += 1;
                break;
            case "O";
                $vogais += 1;
                break;
            case "u";
                $vogais += 1;
                break;
            case "U";
                $vogais += 1;
                break;
        }//fim do Switch
        $j--;
        $i++;

    }//fim do while
    return $vogais;
}//fim das vogais

//Exercício 15: Faça um programa que peça um número e exiba todos os números primos menores ou iguais a esse número. 

function primosMenores($num1){
    $primos = "";
    $i = 0;
    if($num1 <= -1){
       return "Não há número(s) primo(s)";
    }
    while($i < $num1 - 1){
        if($i == 2 || $i == 3 || $i == 5 || $i == 7 || $i == 11){
            $primos = $primos . $i . ",";
    }
    else{
        if($i % 2 == 0 || $i % 3 == 0 || $i % 5 == 0 || $i % 7 == 0 || $i % 11 || 0){
            $primos = $primos . "," . $i;
        }
    }//fim do while   
    $i++;
    }//fim do if
    return $primos;
}//Fim da função

//Exercício 16: Faça um programa que peça ao usuário uma data (dia, mês e ano) e verifique se a data é válida.  

function data($num1, $num2, $num3){
    if ($num1 < 1 || $num1 > 31){
        return "Data inválida";
    }
    if ($num2 < 1 || $num2 > 12){
        return "Data inválida";
    }
    if ($num3 <= 0){
        return "Data inválida";
    }
    return "Data válida: $num1/$num2/$num3";
}//Fim do 16
 
//Exercício 17: Faça um programa que peça ao usuário para digitar 5 números e exiba a média deles. 

//Exercício 17
function media($num1,$num2,$num3,$num4,$num5){
    $media = ($num1+$num2+$num3+$num4+$num5)/5;
    return $media;
}//Fim do 17

 
//Exercício 18: Faça um programa que peça um número e exiba todos os seus divisores.

function divisores($num1){
    $num3 = '';
    for ($num2 = 1; $num2 <= $num1; $num2++){
        if ($num1 % $num2 == 0){
            $num3 .= "$num2 ";
        }
    }
    return $num3;
}//Fim do 18
 
//Exercício 19: Faça um programa que peça ao usuário para digitar um texto e conte quantas palavras esse texto possui. 
 
//Exercício 20: Faça um programa que peça ao usuário para digitar um número e calcule a sequência de Fibonacci até esse número. 






/*
//imprimir os dados na tela
echo "<br>A soma dos números é: " .somar(5,6);
echo "<br>A subtração dos números é: " .subtrair(5,6);
echo "<br>A multiplicação dos números é: " .multiplicar(5,6);
echo "<br>A divisão dos números é: " .dividir(6,7);
echo "<br>A escolha é: " .escolher(2);
echo "<br>A conversão é: " .converterbinario(42);
echo "<br>A conversão de binário para decimal é: " .converterDecimal("101010");
echo "<br>A conversão de decimal para Hexa é: " .converterDecimalHexa(1000);
echo "<br>A conversão de Hexa para Decimal é: " .converterHexaDecimal("3E98");
*/