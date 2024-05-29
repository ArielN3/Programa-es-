<?php
define("INFERIOR",1);
define("SUPERIOR",100);

$numero = rand(INFERIOR, SUPERIOR);
echo "Meu numero da sorte: <br>";
echo $numero."<br>";
?>
<?php
$x = 5; //Ambito global

function meuTeste () {
    echo "<p>A variavel x dentro da função é: $x</p><br>";
    }
    //Ambito local
         meuTeste ();
    echo "<p>A variavel x dentro da função é: $x</p><br>";
   
?>

<?php
$x = 5;
$y = 10;
function numero(){
    global $x, $y;
    $y= $x + $y;
    }
numero();
echo $y;
?>

<?php
//ambito estatico
function teste(){
        static $x = 0;
        echo $x;
        $x++;
    }
echo "<br>";
echo "<br>";
teste();
echo "<br>";
teste();
echo "<br>";
teste();

?>
<?php
echo "<br>Geovane da Costa";
print "<br>Geovane da Costa<br><br>";
?>
<?php
$x = 5;
var_dump($x);
echo "<br>";
?>
<?php
$x = 'Minha string';
$y = "Minha string 2!";
var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";
?>
<?php
$x = 3.14;
var_dump($x);
echo "<br>";
?>
<?php
$x = true;
var_dump($x);
echo "<br>";
?>
<?php
$cars =array("BMW","BYD","AUDI");
var_dump($cars);
echo "<br>";
?>

<?PHP 
$octeto = 172;
$mascara = 248;
$valor = $octeto & $mascara;
echo "<br> Aplicando alteração AND entre a máscara e octeto com valor $valor";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
?> 
<?PHP
$valor = 10;
if($valor == 15){
		echo "<br> Valor é 15";
}
elseif ($valor >= 10){
echo "valor é maior ou igual a 10";
}
else {
	echo"valor é menor que 10";
}

?>
<?PHP
echo"<br>";
$v = "Fabio";
$nome = $v."dos reis";
	echo $nome;

?>	
<?PHP
$valor = 10;
if ($valor === "10"){
	echo "Valor é string"; 	
}
else {
	echo "Valor não é string";
}
echo "<br><br>";
echo "Agora, fazendo cast no valor atribuido a variavel: <br>";
$valor = (string) 10;
if ($valor ==="10") {
	echo "Valor não é string";
}
else {
	echo "Valor não é string";
}
?> 
<?PHP
$a = 10;
$b = 20;
echo ($a == 10) && ($b == 20);
echo "<br>";
if (($a == 10) && ($b == 20)){
	echo "Ambora os valores estão corretos <br>";
}
if (($a == 20) && ($b == 10)){
	echo "Um dos valores está correto <br>";
}
if (($a == 10) && ($b == 10)){
	echo "Um dos valores está errado <br>";
}
?>
<?php
$a = 3 + 5 * 4;
$b = (3 + 5) * 4;
echo $a;
echo "<br>";
echo $b; 

?>
<?PHP 
$a = 10;
$b = 10;
$c = 10;
$d = 10;
$resultado = ($a+$b+$c+$d)/4;
echo "<br>A média é : $resultado";
if ($resultado >= 7&& $resultado!=10){
    echo "Aprovado<>";
} 	

elseif ($resultado == 10){	
    echo "<br> Parbéns! Aprovado com nota maxima.";
}
elseif ($resultado == 0){	
    echo "<br> Estude mais,você não acertou nada";
}
elseif ($resultado <=7 ){	
    echo "<br> Aluno Reprovado, BURROOOO";
}
 
?>
<?PHP
$num = 30;
if ($num  <20){
	echo "O numero e menor que 20";
}
elseif ($num >20){
	echo "O numero e maior que 20";
}
arielN3suporte
?>
