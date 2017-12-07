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
    <section class="container contato">
      <div class="contato" style="float: left">
        <h2>Informações de Contato</h2>
        <h3>JD Autos</h3>
        <p><strong>Endereço: Avenida Professor Alberto Vollet Sachs, 151 - Nova América</strong></p>
        <p><strong>CEP: </strong>13417-670 - Piracicaba/SP</p>
        <p><strong>Fone: </strong>(19) 3426-4142</p>
      </div>

      <div class="form-contato">
        <h2>Formulário de contato</h2>
        <form action="contato.php" method="post">
          <p><input type="text" name="nome" placeholder="Nome" size="72"></p>
          <p><input type="text" name="email" placeholder="email@example.com" size="72"></p>
          <textarea name="menssagem" rows="8" cols="70"></textarea>
          <p><input type="submit" name="submit" value="Enviar" /></p>
        </form>
      </div>
    </section>
  </body>
</html>
