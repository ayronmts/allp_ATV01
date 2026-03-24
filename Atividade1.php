<?php

$peso = 125;
$altura = 1.87;
$imc = $peso / ($altura **2);

echo "Sua altura é: $altura<br>";
echo "Seu peso é: $peso<br>";
echo "Seu IMC é: $imc <br><br>";
echo "Sua classificação é: ";

if ($imc <16)
    {echo "magreza grau 3";}
elseif ($imc >=16 && $imc <17)
    {echo "magreza grau 2";}  
elseif ($imc >=17 && $imc <18.5)
    {echo "magreza grau 1";}
elseif ($imc >=18.5 && $imc <25)
    {echo "eutrofia";}
elseif ($imc >=25 && $imc <30)
    {echo "pré-obesidade";}
elseif ($imc >=30 && $imc <35) 
    {echo "obesidade moderada (grau 1)";}
elseif ($imc >=35 && $imc <40)
    {echo "obesidade severa (grau 2)";}
else 
    {echo "obesidade muito severa (grau 3)";}             

?>