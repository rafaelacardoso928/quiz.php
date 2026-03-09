<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">
<title>Quiz</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h1 class="titulo">Quiz de Personalidade Tech</h1>

<div class="progresso">
<div class="barra"></div>
</div>

<form action="resultado.php" method="POST">

<label>Seu nome</label>
<input type="text" name="nome" required>

<div class="card">
<h3>1. O que você prefere fazer no computador?</h3>
<label><input type="radio" name="p1" value="frontend" required> Criar páginas</label>
<label><input type="radio" name="p1" value="backend"> Programar</label>
<label><input type="radio" name="p1" value="games"> Jogar</label>
<label><input type="radio" name="p1" value="ia"> Automatizar</label>
</div>

<div class="card">
<h3>2. Qual matéria você mais gosta?</h3>
<label><input type="radio" name="p2" value="frontend"> Artes</label>
<label><input type="radio" name="p2" value="backend"> Matemática</label>
<label><input type="radio" name="p2" value="games"> Informática</label>
<label><input type="radio" name="p2" value="ia"> Física</label>
</div>

<div class="card">
<h3>3. O que parece mais interessante?</h3>
<label><input type="radio" name="p3" value="frontend"> Design</label>
<label><input type="radio" name="p3" value="backend"> Sistemas</label>
<label><input type="radio" name="p3" value="games"> Jogos</label>
<label><input type="radio" name="p3" value="ia"> Robôs</label>
</div>

<div class="card">
<h3>4. Você prefere:</h3>
<label><input type="radio" name="p4" value="frontend"> Criar layouts</label>
<label><input type="radio" name="p4" value="backend"> Resolver problemas</label>
<label><input type="radio" name="p4" value="games"> Criar histórias</label>
<label><input type="radio" name="p4" value="ia"> Automatizar coisas</label>
</div>

<div class="card">
<h3>5. Qual linguagem parece mais legal?</h3>
<label><input type="radio" name="p5" value="frontend"> HTML/CSS</label>
<label><input type="radio" name="p5" value="backend"> PHP</label>
<label><input type="radio" name="p5" value="games"> C#</label>
<label><input type="radio" name="p5" value="ia"> Python</label>
</div>

<div class="card">
<h3>6. Você prefere trabalhar com:</h3>
<label><input type="radio" name="p6" value="frontend"> Interfaces</label>
<label><input type="radio" name="p6" value="backend"> Sistemas</label>
<label><input type="radio" name="p6" value="games"> Jogos</label>
<label><input type="radio" name="p6" value="ia"> IA</label>
</div>

<div class="card">
<h3>7. O que parece mais divertido?</h3>
<label><input type="radio" name="p7" value="frontend"> Criar sites</label>
<label><input type="radio" name="p7" value="backend"> Criar apps</label>
<label><input type="radio" name="p7" value="games"> Criar jogos</label>
<label><input type="radio" name="p7" value="ia"> Criar robôs</label>
</div>

<div class="card">
<h3>8. Você gosta mais de:</h3>
<label><input type="radio" name="p8" value="frontend"> Design</label>
<label><input type="radio" name="p8" value="backend"> Lógica</label>
<label><input type="radio" name="p8" value="games"> Criatividade</label>
<label><input type="radio" name="p8" value="ia"> Inovação</label>
</div>

<div class="card">
<h3>9. Qual área parece mais legal?</h3>
<label><input type="radio" name="p9" value="frontend"> Front-end</label>
<label><input type="radio" name="p9" value="backend"> Back-end</label>
<label><input type="radio" name="p9" value="games"> Games</label>
<label><input type="radio" name="p9" value="ia"> IA</label>
</div>

<div class="card">
<h3>10. No futuro você gostaria de:</h3>
<label><input type="radio" name="p10" value="frontend"> Criar sites</label>
<label><input type="radio" name="p10" value="backend"> Criar sistemas</label>
<label><input type="radio" name="p10" value="games"> Criar jogos</label>
<label><input type="radio" name="p10" value="ia"> Criar robôs</label>
</div>

<button type="submit" class="botao">Descobrir meu perfil</button>

</form>

</div>

</body>

</html>