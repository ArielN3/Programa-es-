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
$num = 50;
if ($num  <20){
	echo "O numero e menor que 20";
}
elseif ($num >20){
	echo "O numero e maior que 20";
}
else
?>

<?PHP 
echo "<br>";
$num = 00;
if ($num >= 20){
	echo "O numero e maior  que 20";
}
elseif ($num <= 20&& $num!=0){
	echo "O numero e menor que 20";
}
elseif ($num = 20){
	echo "O numero e igual a 20";
}
elseif ($num  == 0) {
	echo "O numero e nulo";
}
else
?> 
<?PHP
echo "<br>";
echo "<br>";
$idade= 12;

if ($idade >= 16) {
        echo "O aluno pode usar o medicamento.";
} 
elseif ($idade > 10 && $idade < 16) {
        echo "O uso do medicamento é permitido com restrições.";
} 
elseif ($idade <= 10 && $idade == 1) {
        echo "O uso do medicamento é proibido.";
} 
elseif ($idade > 65) {
        echo "O uso do medicamento é permitido com restrições.";
}
else
?>
<?PHP
$a = 5;     	//INTER 
$b = 3.14;  	//FLOAT
$c = "hoje";	//STRING
$d = true;	 	//BOOLEANO 
$e = NULL; 	 	//NULL

//Converção para string
$a = (String) $a;
$b = (String) $b;
$c = (String) $c;
$d = (String) $d;
$e = (String) $e;

//Mostrar ao usuario 
echo "<br>";
var_dump ($a);echo "<br>";
var_dump ($b);echo "<br>";
var_dump ($c);echo "<br>";
var_dump ($d);echo "<br>";
var_dump ($e);echo "<br>";
echo "<br>"; 

?> 
<?PHP
$a = array ("VOlvo", "BMW", "Toyota"); //array indexado
$b = array ("Peter">="30", "João">= "40", "Carlos">="50");
//array associativo

$a = (object) $a;
$b = (object) $b;
echo "<br>";
var_dump($a);echo "<br>";
var_dump($b);echo "<br>";

?>
<?PHP

echo (pi());
echo "<br>";
echo (min(0, 20, 130, -10, -230)) . "<br>";
echo (min(0, 25, 230, -100, -530)) . "<br>";
echo (sqrt(64)) .  "<br>";
echo (sqrt(4)) .  "<br>";
echo (round(0.60)) . "<br>";
echo (rand()) . "<br>";
echo (rand(10, 50)) . "<br>";
?>
