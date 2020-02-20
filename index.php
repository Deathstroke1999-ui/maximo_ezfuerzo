<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>Document</title>
</head>
<body>
      <section class="container">
    <form class="form" method="POST">
      <div class="row">
        <div class="col-md-12"> <h2>CONTACT US</h2></div>
      </div>
       
      <div class="row">
      <div class="col-md-12"><p type="Nombre Completo:"><input type="text" name="name"placeholder="Ingrese su nombre completo"></input></p></div>
      </div>
      <div class="row">  <div class="col-md-12"> <p type="Correo:" ><input type="email" name="email" placeholder="Ingrese su correo electrónico"></input></p></div></div>
    
      <div class="row"> <div class="col-md-12">  <p type="Celular"><input type="text"name="telefono" placeholder="Ingrese su N° Celular"></input></p></div></div>
     
      <div class="row"><div class="col-md-12"> <p type="Pregunta:" ><input type="text" name="mensaje" placeholder="Conoces amigos que quieran tomar los 7 dias?"></input></p></div></div>
      
      <div class="row"><div class="col-md-12">
        <input type="submit" name="register" class="button"></div></div>
      
      
        <div class="numero">
        <div class="row">
          <div class="col-md-12">  <h4>Contacto : 9491319490 - kaizen1602@gmail.com<h4></h4></div>
        </div>
          
                               
           
          
          </div>
          
          


      </form>
        
      
         
        
      
    </section>
      <?php
        include("registrar.php")
      ?>
</body>
</html>