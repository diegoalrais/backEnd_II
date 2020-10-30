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
        <p class="lead" style="text-align:justify">Para gerar mais transparência e aumentar o controle social sobre as manifestações enviadas, 
          o cidadão que se identificar receberá, após efetuar o chamado, o número de protocolo para consultar, quando quiser, o andamento da manifestação. 
          Além disso, relatórios e gráficos, apresentando o fluxo de atendimento, estão disponibilizados 
          nesta página, agrupando todos os serviços da ouvidoria
           em um só local para facilitar o controle social. Todos os recursos necessários para abertura, acompanhamento e 
           fiscalização dos atendimentos realizados estão disponíveis aqui.
           <br/>Caso necessário entre em contato conosco.<br />Estamos à disposição para mais esclarecimentos sobre a utilização do serviço.</p>
      </div>
      <?php session_start();?>
      
      <div class="row"> 
        <div class="col-md-12">
            <h4>Manifestações</h4>
            <div class="card">
              <div class="card-header">Online</div>
                <div class="col-md-12" style="margin-top: 20px">
                  <form action='cadastrar.php' method='post'></form>
                  <p>Para manifestação online, clique no botão "Cadastrar manifestação" e, caso opte por se identificar, insira os seus dados e a manifestação nos campos exigidos. Um protocolo será gerado para acompanhamento. Caso opte pelo anonimato, insira apenas os dados da manifestação.</p>  
                  <hr />
                  <a href="cadastrar.html" class="btn btn-danger btn-lg btn-block" style="margin-bottom: 20px">Cadastrar Manifestação</a>
                </div>
            </div>

            <div class="card">
              <div class="card-header">Consultar</div>
                <div class="col-md-12" style="margin-top: 20px"> 
                  <form action='consultar.php' method='post'>
                      <div class="col-md-12">
                        <label for="protocolo">Número da Ocorrência</label>
                        <input type="text" class="form-control" id="protocolo" name="protocolo" required>
                      </div>
                      <hr />
                      <div class="col-md-12">
                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Enviar" style="margin-bottom:50px">
                      </div>
                  </form>
                </div>
            </div>
        </div>
              
      </div>
        
    </div><!-- container -->
  </body>
</html>
