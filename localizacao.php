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
      <h2>Localização</h2>
      <div class="map" >
        <iframe width="800" height="400" frameborder="0" style="border:0" src="https://www.google.com/maps?q=Avenida Professor Alberto Vollet Sachs, 151 - Nova América - Piracicaba/SP&output=embed" allowfullscreen>
        </iframe>
      </div>
      <div class="location-text">
        <h3>Nossa Localização</h3>
        <p>Nós estamos localizado na Avenida Professor Alberto Vollet Sachs número 151 no bairro Nova América, cidade de Piracicaba/SP.</p>
        <strong>JD Autos</strong>
        <p>Avenida Professor Alberto Vollet Sachs, 151 - Nova América</p>
        <p>CEP: 13417-670 - Piracicaba/SP</p>
      </div>
    </section>
  </body>
  <?php
    require_once("shared/footer.html");
   ?>
</html>
