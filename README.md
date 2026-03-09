# 💻 Dev Girl Quiz – Quiz de Personalidade Geek

![Preview do Projeto](img/preview.png)

Este projeto é um **site interativo de quiz de personalidade tecnológica**, desenvolvido utilizando **HTML, CSS e PHP**.

O objetivo do sistema é descobrir **qual perfil tecnológico combina mais com o usuário**, através de perguntas sobre programação, criatividade, jogos e inovação.

Ao final do quiz, o sistema analisa as respostas e apresenta um **resultado personalizado**, mostrando o perfil do jogador, uma descrição e uma imagem ilustrativa.

---

# 🎯 Objetivo do Projeto

Este projeto foi desenvolvido para aplicar na prática conceitos de desenvolvimento web estudados em aula.

Durante o desenvolvimento foram utilizados conceitos como:

- Estrutura de páginas com **HTML**
- Estilização com **CSS**
- Criação de **formulários**
- Envio de dados utilizando **método POST**
- Processamento de dados com **PHP**
- Uso de **variáveis**
- Estruturas condicionais (**if / elseif / else**)
- Uso de **arrays**
- Armazenamento de dados com **cookies**
- Organização de arquivos de um projeto web

---

# 🖥️ Funcionamento do Sistema

O sistema é dividido em **3 páginas principais**:

### 🏠 Tela Inicial (index.php)

A primeira página apresenta:

- título do quiz
- descrição do jogo
- botão para iniciar o quiz
- mensagem de boas-vindas usando **cookie**, caso o usuário já tenha jogado antes.

---

### 📋 Página do Quiz (quiz.php)

Nesta página o usuário responde **10 perguntas de múltipla escolha** relacionadas ao mundo da tecnologia.

Cada resposta representa um tipo de perfil.

As respostas são enviadas utilizando o **método POST** para a página de resultado.

---

### 🏆 Página de Resultado (resultado.php)

Após enviar o formulário, o PHP processa as respostas e calcula qual perfil teve mais pontos.

O sistema então mostra:

- Nome do jogador
- Perfil descoberto
- Descrição do perfil
- Imagem ilustrativa
- Contador de quantas vezes o quiz foi jogado

Também é criado um **cookie** para salvar o nome do jogador.

---

# 🧠 Perfis Possíveis

O quiz possui **4 possíveis resultados**.

### 🎨 Ninja do Front-end

Perfil criativo que gosta de trabalhar com design e interfaces visuais.  
Pessoas com esse perfil costumam gostar de HTML, CSS e criação de sites modernos.  
Seu talento está em transformar ideias em páginas bonitas e fáceis de usar.  
A experiência do usuário é algo muito importante para você.

---

### 🐞 Caçadora de Bugs

Perfil lógico e analítico que gosta de resolver problemas.  
Você se interessa por programação e por entender como os sistemas funcionam.  
Encontrar erros e corrigir falhas faz parte das suas habilidades.  
Seu talento está em garantir que tudo funcione corretamente.

---

### 🎮 Criadora de Games

Perfil criativo e imaginativo.  
Você gosta de jogos, histórias e desafios interativos.  
Pessoas com esse perfil costumam se interessar por desenvolvimento de games e animações.  
Seu talento está em transformar diversão em experiências digitais.

---

### 🤖 Exploradora de Inteligência Artificial

Perfil curioso e inovador.  
Você gosta de tecnologias do futuro e novas descobertas.  
Inteligência artificial, automação e robótica chamam muito sua atenção.  
Seu talento está em explorar novas possibilidades da tecnologia.

---

# 🎨 Protótipo do Projeto

Durante o desenvolvimento foi criado um protótipo das telas principais.

### Tela Inicial

![Tela Inicial](img/prototipo_home.png)

---

### Página do Quiz

![Tela do Quiz](img/prototipo_quiz.png)

---

### Tela de Resultado

![Tela de Resultado](img/prototipo_resultado.png)

---

# 🛠️ Tecnologias Utilizadas

Este projeto foi desenvolvido utilizando:

- **HTML**
- **CSS**
- **PHP**
- **Formulários**
- **POST**
- **Cookies**
- **Condicionais**
- **Arrays**

---

# 📂 Estrutura do Projeto

quiz_geek
│
├── index.php
├── quiz.php
├── resultado.php
├── style.css
├── contador.txt
│
└── img
├── frontend.png
├── backend.png
├── games.png
├── ia.png
├── prototipo_home.png
├── prototipo_quiz.png
└── prototipo_resultado.png


---

# ▶️ Como Executar o Projeto

Para executar o projeto localmente:

1. Instale o **XAMPP** ou outro servidor local.

2. Coloque a pasta do projeto dentro da pasta:
htdocs


3. Inicie o **Apache** no XAMPP.

4. Abra o navegador e acesse:
http://localhost/quiz_geek


5. Agora é só responder o quiz e descobrir seu perfil!

---

# ✨ Funcionalidades do Sistema

✔ Quiz com **10 perguntas**  
✔ Resultado personalizado  
✔ Sistema de **pontuação de perfis**  
✔ **Contador de vezes que o quiz foi jogado**  
✔ **Cookie para lembrar o nome do jogador**  
✔ Interface estilizada com CSS  
✔ Imagens para cada perfil  
✔ Organização de arquivos em pastas

---

# 👩‍💻 Rafaela Cardoso

Projeto desenvolvido para atividade prática da disciplina de **Desenvolvimento Web (HTML, CSS e PHP)**.

<img width="1920" height="1080" alt="1" src="https://github.com/user-attachments/assets/f73cb649-a545-47e6-b6cc-9b575431e88f" />


<img width="1920" height="1080" alt="2" src="https://github.com/user-attachments/assets/d0f7fc90-0510-4459-98bc-1369631daa8a" />


<img width="1920" height="1080" alt="3" src="https://github.com/user-attachments/assets/110a1107-f5e0-40f9-b80b-61712cbfc8ae" />




