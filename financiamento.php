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
    <section class="container">
      <h2>Simule seu Financiamento</h2>
      <div class="panel-fin">
        <form class="form" action="process.php">
          <div class="input">
            <p>Nome:</p>
            <input type="text" name="nome" size="70">
          </div>

          <div class="input">
            <p>CPF:</p>
            <input type="text" name="cpf" size="70">
          </div>

          <div class="input" style="display: inline">
            <div class="" style="display: inline; float: left; margin-right: 10px;">
              <p>Modelo:</p>
              <input type="text" name="modelo" size="46">
            </div>

            <div style="display: inline">
              <p>Ano</p>
              <input type="text" name="ano" size="20">
            </div>
          </div>

          <div class="input" style="display: inline">
            <div class="" style="display: inline; float: left; margin-right: 10px;">
              <p>Valor Entrada:</p>
              <input type="text" name="entrada" size="20">
            </div>

            <div style="display: inline">
              <p>Valor Veículo</p>
              <input type="text" name="valor" size="20">
            </div>
          </div>

          <div class="input">
            <p>Parcelas:</p>
            <select name="parcelas">
              <option value="24">24x</option>
              <option value="36">36x</option>
              <option value="48">48x</option>
              <option value="60">60x</option>
            </select>
          </div>

          <div class="actions">
            <input type="submit" name="submit" value="Simular">
            <input type="reset" name="reset" value="Limpar">
          </div>
        </form>
      </div>
    </section>
  </body>
  <?php
    require_once("shared/footer.html");
   ?>
</html>
