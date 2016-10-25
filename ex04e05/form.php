<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Confirmação</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css" integrity="sha256-sEGfrwMkIjbgTBwGLVK38BG/XwIiNC/EAG9Rzsfda6A=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha256-916EbMg70RQy9LHiGkXzG8hSg9EdNy97GazNG/aiY1w=" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/site.css">
</head>

<body>
    <header>
        <div class="container">
            <h1>Cadastro</h1>
      </div>
    </header>
    <main class="container">
        <?php
        $nome = $cpf = $genero  = $telefone = $celular = $email = "";
        echo "<h2>Dados inseridos:</h2>";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $nome = test_input($_POST["nome"]);
          echo "<p> <b>Nome: </b>: " . $nome . "<p>";
          $cpf = test_input($_POST["cpf"]);
          echo "<p> <b> CPF: </b>" . $cpf .  "<p>";
          $genero = test_input($_POST["genero"]);
          echo "<p> <b>Gênero: </b>" . $genero .  "<p>";
          echo "<p> <b>Áreas de interesse: </b><p>";
          foreach($_POST['areas'] as $areas) echo "<p>" . $areas . "<p>" ;
          $telefone = test_input($_POST["telefone"]);
          echo "<p> <b> Telefone: </b>" . $telefone .  "<p>";
          $celular = test_input($_POST["celular"]);
          echo "<p> <b> Celular: </b>" . $celular ."<p>";
          $email = test_input($_POST["email"]);
          echo "<p><b> Email: </b>" .  $email . "<p>";
          
        } 
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }


      ?>
      <a href="index.html" class="btn btn-default">Novo cadastro</a>
      
    </main>
    <footer>
        <div class="container">
            <p>Kelly Márcia de Oliveria</p>
            <p>Matrícula 13.1.8373</p>
            <a href="mailto:kmdeoliv@syr.edu" target="_top"> <i class="fa fa-envelope-o" aria-hidden="true"></i> kmdeoliv@syr.edu</a>
        </div>
    </footer>
    </body>
</html>