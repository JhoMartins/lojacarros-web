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
      <h2>Destaques da Semana</h2>
      <div class="panel" style="padding:0; margin:0;">
        <ol>
           <li>
             <div class="image">
               <a href="#">
                 <figure>
                   <img src="images/cars/onix2017.jpg" width="280" height="250" />
                 </figure>
               </a>
             </div>
             <div class="text">
               <h3>Onix 4P LT FLEX</h3>
               <p>2017 LT Flex - R$ 35000,00</p>
             </div>
           </li>
           <li>
             <div class="image">
               <a href="#">
                 <figure>
                   <img src="images/cars/prisma2017.jpg" width="280" height="250" />
                 </figure>
               </a>
             </div>
             <div class="text">
               <h3>Prsima 4P 1.4</h3>
               <p>2017 LT Flex - R$ 40000,00</p>
             </div>
           </li>
           <li>
             <div class="image">
               <a href="#">
                 <figure>
                   <img src="images/cars/hb202017.jpeg" width="280" height="250" />
                 </figure>
               </a>
             </div>
             <div class="text">
               <h3>HB20 Automatico 1.6</h3>
               <p>2017 LT Flex - R$ 46000,00</p>
             </div>
           </li>
           <li>
             <div class="image">
               <a href="#">
                 <figure>
                   <img src="images/cars/i302012.jpg" width="280" height="250" />
                 </figure>
               </a>
             </div>
             <div class="text">
               <h3>I30 Completo</h3>
               <p>2012 LT Flex - R$ 31000,00</p>
             </div>
           </li>
           <li>
             <div class="image">
               <a href="#">
                 <figure>
                   <img src="images/cars/newfiesta2017.jpg" width="280" height="250" />
                 </figure>
               </a>
             </div>
             <div class="text">
               <h3>New Fiesta Completo</h3>
               <p>2017 LT Flex - R$ 35000,00</p>
             </div>
           </li>
           <li>
             <div class="image">
               <a href="#">
                 <figure>
                   <img src="images/cars/renagate2018.png" width="280" height="250" />
                 </figure>
               </a>
             </div>
             <div class="text">
               <h3>Jeep Renegate</h3>
               <p>2017 - R$ 55000,00</p>
             </div>
           </li>
           <li>
             <div class="image">
               <a href="#">
                 <figure>
                   <img src="images/cars/hrv2017.jpg" width="280" height="250" />
                 </figure>
               </a>
             </div>
             <div class="text">
               <h3>Honda HRV Completo</h3>
               <p>2017 LT Flex - R$ 35000,00</p>
             </div>
           </li>
           <li>
             <div class="image">
               <a href="#">
                 <figure>
                   <img src="images/cars/civic2008.jpg" width="280" height="250" />
                 </figure>
               </a>
             </div>
             <div class="text">
               <h3>Honda Civic Automático</h3>
               <p>2018 LT Flex - R$ 35000,00</p>
             </div>
           </li>
        </ol>
      </div>
    </section>
  </body>
  <footer style="position: relative">
    <div class="footer container">
      <div class="vertical-logo">
        <img src="images/JDAUTOS.png" alt="Logo da loja" width="120" height="120">
        <p>&copy;	JD Autos 2017</p>
      </div>
      <div class="news">
        <h2>Novidades</h2>
        <p>Cadastre seu e-mail e receba mensalmente nossas ofertas!</p>
        <input type="text" name="email" placeholder="seuemail@email.com" size="68">
      </div>
      <div class="address">
        <h2>Onde Estamos</h2>
        <p><strong>Endereço:</strong> Avenida Professor Alberto Vollet Sachs, 151 - Nova América </p>
        <p><strong>CEP:</strong> 13417-670 - Piracicaba/SP <strong style="margin-left: 10px;">  Fone:</strong> (19) 3426-4142</p>
      </div>
    </div>
  </footer>
</html>
