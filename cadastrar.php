<?php
require_once 'includes/conexao.php';
require_once 'class/Ouvidoria.php';

$dados = new Ouvidoria();

$dados->nome = $_POST['nome'];
$dados->email = $_POST['email'];
$dados->cpf = $_POST['cpf'];
$dados->rg = $_POST['rg'];
$dados->cep = $_POST['cep'];
$dados->logradouro = $_POST['logradouro'];
$dados->numero = $_POST['numero'];
$dados->complemento = $_POST['complemento'];
$dados->bairro = $_POST['bairro'];
$dados->cidade = $_POST['cidade'];
$dados->uf = $_POST['uf'];
$dados->pais = $_POST['pais'];	
$dados->telefone_ddd = $_POST['telefone_ddd'];
$dados->telefone_numero = $_POST['telefone_numero'];
$dados->celular_ddd = $_POST['celular_ddd'];
$dados->celular_numero = $_POST['celular_numero'];
$dados->mensagem = $_POST['mensagem'];
    
$dados->cadastrar();

session_start();
$_SESSION['protocolo'] = $dados->protocolo;
$sessao = $_SESSION['protocolo'];

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ouvidoria UniCesumar</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      
    <script type="text/javascript" src="dist/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="dist/bootstrap/js/bootstrap.min.js"></script>
  </head>

  <body>

    <div class="container">
      <div class="text-center" style="margin-top: 20px">
        <img src="unicesumar.png" />

        <h2 style="margin-top:20px">Ouvidoria</h2>
        <p class="lead">Caso necessário entre em contato conosco.<br />Estamos à disposição para mais esclarecimentos sobre a utilização do serviço.</p>
      </div>
      <div style="margin: 100px; margin-top:0px; background:#1E90FF; color: #ffffff; text-align:center; font-weight: bold">
          <p>Anote seu número de protocolo para eventual consulta.</p>
          <p>Protocolo: <?=$sessao?></p>
      </div>
      <a href="index.php" class="btn" style="margin-right:100px; background:#1E90FF; color: #ffffff">Voltar</a>
      </body>
</html>
