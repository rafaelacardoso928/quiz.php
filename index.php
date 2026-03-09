<?php
$jogador="";

if(isset($_COOKIE['jogador'])){
$jogador=$_COOKIE['jogador'];
}
?>

<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">
<title>Dev Girl Quiz</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h1 class="titulo">Dev Girl Quiz</h1>

<?php
if($jogador!=""){
echo "<p class='bemvindo'>Bem-vinda de volta, $jogador! 💖</p>";
}
?>

<p class="texto">
Responda as perguntas e descubra qual é o seu verdadeiro perfil no mundo da tecnologia.
</p>

<a href="quiz.php" class="botao">Começar Quiz</a>

</div>

</body>

</html>