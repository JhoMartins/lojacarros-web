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
                   <img src="images/cars/onix2017.jpg" width="280" height="250" />
                 </figure>
               </a>
             </div>
           </li>
           <li>
             <div class="image">
               <a href="#">
                 <figure>
                   <img src="images/cars/onix2017.jpg" width="280" height="250" />
                 </figure>
               </a>
             </div>
           </li>
           <li>
             <div class="image">
               <a href="#">
                 <figure>
                   <img src="images/cars/onix2017.jpg" width="280" height="250" />
                 </figure>
               </a>
             </div>
           </li>
        </ol>
      </div>
    </section>
  </body>
  <?php
    require_once("shared/footer.html");
   ?>
</html>
