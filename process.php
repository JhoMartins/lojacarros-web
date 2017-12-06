<!DOCTYPE html>
<html>
  <head>
    <title>JD Autos</title>
    <meta charset="utf-8">
    <Link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <header>
      <?php
        require_once('shared/navbar.html');
       ?>
    </header>
    <section class="container" style="font-family: 'Open Sans', sans-serif;">
      <?php
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $veiculo = $_POST['veiculo'];
        $ano = $_POST['ano'];
        $entrada = $_POST['entrada'];
        $valor = $_POST['valor'];

        $mensagem_erro = "";
        $erros = 0;

        if (isset($_POST['submitted'])) {
          if($nome == "") {
            $erros = $erros + 1;
            $mensagem_erro = $mensagem_erro . "- O campo [Nome] é de preenchimento obrigatório. <br />";
          }

          if($cpf == "") {
            $erros = $erros + 1;
            $mensagem_erro = $mensagem_erro . "- O campo [CPF] é de preenchimento obrigatório. <br />";
          }

          if($veiculo == "") {
            $erros = $erros + 1;
            $mensagem_erro = $mensagem_erro . "- O campo [Veículo] é de preenchimento obrigatório. <br />";
          }

          if($ano == "") {
            $erros = $erros + 1;
            $mensagem_erro = $mensagem_erro . "- O campo [Ano] é de preenchimento obrigatório. <br />";
          }

          if($entrada == "") {
            $erros = $erros + 1;
            $mensagem_erro = $mensagem_erro . "- O campo [Entrada] é de preenchimento obrigatório. <br />";
          }

          if($valor == "") {
            $erros = $erros + 1;
            $mensagem_erro = $mensagem_erro . "- O campo [Valor] é de preenchimento obrigatório. <br />";
          }

          if (isset($_POST['parcelas'])) {
            $parcelas = $_POST['parcelas'];
          }
          else {
            $erros = $erros + 1;
            $mensagem_erro = $mensagem_erro . "- O campo [Parcelas] é de seleção obrigatória. <br />";
          }

          if ($erros >= 1) {
            echo "<h1>O seu formulário contém $erros erro(s) :</h1>";
            echo $mensagem_erro;
            echo "<br/> <input type='button' value='Corrigir Erros' onclick='javascript:history.go(-1)'/>";
          }

          else {
            if (is_numeric($entrada) && is_numeric($valor) && is_numeric($ano)){
              $total = ($valor - $entrada) * ($parcelas * 1.02);
              $total_parcela = $total/$parcelas;

              echo '<h2>Resultado da Simulação</h2>' .
                   '<strong>Nome: </strong>' . $nome . '<br />'.
                   '<strong>CPF: </strong>' . $cpf . '<br />'.
                   '<strong>Veículo: </strong>' . $modelo . '<br />'.
                   '<strong>Ano: </strong>' . $ano . '<br />'.
                   '<strong>Entrada: </strong>' . $entrada . '<br />'.
                   '<strong>Valor: </strong>' . $valor . '<br />' .
                   '<strong>Financiamento: </strong>' . $parcelas . 'x ' . $total_parcela;
            }

          }
        }

       ?>
    </section>
  </body>
  <?php
    require_once('shared/footer.html');
   ?>
</html>
