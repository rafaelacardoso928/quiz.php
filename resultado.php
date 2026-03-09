<?php

$nome=$_POST['nome'];

$frontend=0;
$backend=0;
$games=0;
$ia=0;

for($i=1;$i<=10;$i++){

$resposta=$_POST["p$i"];

if($resposta=="frontend")$frontend++;
if($resposta=="backend")$backend++;
if($resposta=="games")$games++;
if($resposta=="ia")$ia++;

}

if($frontend>$backend && $frontend>$games && $frontend>$ia){

$perfil="Ninja do Front-end";

$descricao="Você é criativa e gosta de deixar tudo bonito e organizado.
Criar sites e interfaces combina muito com seu estilo.
Pessoas com esse perfil gostam de design e experiência do usuário.
Seu talento é transformar ideias em páginas incríveis.";

$imagem="img/frontend.png";

}

elseif($backend>$frontend && $backend>$games && $backend>$ia){

$perfil="Caçadora de Bugs";

$descricao="Seu pensamento lógico é muito forte.
Você gosta de entender como os sistemas funcionam.
Resolver problemas e encontrar erros é algo natural para você.
Seu talento está na programação e na lógica.";

$imagem="img/backend.png";

}

elseif($games>$frontend && $games>$backend && $games>$ia){

$perfil="Criadora de Games";

$descricao="Você tem muita imaginação e criatividade.
Criar histórias e desafios combina com você.
Pessoas com esse perfil gostam de jogos e animações.
Seu talento é transformar diversão em tecnologia.";

$imagem="img/games.png";

}

else{

$perfil="Exploradora de IA";

$descricao="Você se interessa pelo futuro da tecnologia.
Inteligência artificial e inovação chamam sua atenção.
Pessoas com esse perfil gostam de aprender coisas novas.
Seu talento está em explorar tecnologias avançadas.";

$imagem="img/ia.png";

}

setcookie("jogador",$nome,time()+3600);

$arquivo="contador.txt";
$contador=file_get_contents($arquivo);
$contador++;

file_put_contents($arquivo,$contador);

?>

<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">
<title>Resultado</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h1 class="titulo">Resultado do Quiz</h1>

<p class="bemvindo">Jogadora: <?php echo $nome; ?></p>

<h2 class="perfil"><?php echo $perfil; ?></h2>

<img src="<?php echo $imagem; ?>" class="imagem">

<p class="descricao"><?php echo $descricao; ?></p>

<p class="contador">Esse quiz já foi jogado <?php echo $contador; ?> vezes</p>

<a href="index.php" class="botao">Voltar ao início</a>

</div>

</body>

</html>