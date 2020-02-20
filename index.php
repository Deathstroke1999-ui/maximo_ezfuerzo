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
      <div class="col-md-12"><p type="name:"><input type="text" name="name"placeholder="Write your name here.."></input></p></div>
      </div>
      <div class="row">  <div class="col-md-12"> <p type="email:" ><input type="email" name="email" placeholder="Let us know how to contact you back.."></input></p></div></div>
    
      <div class="row"> <div class="col-md-12">  <p type="Phone Number:"><input type="text"name="telefono" placeholder="Let us know how to contact you back.."></input></p></div></div>
     
      <div class="row"><div class="col-md-12"> <p type="Message:" ><input type="text" name="mensaje" placeholder="What would you like to tell us.."></input></p></div></div>
      
      <div class="row"><div class="col-md-12">
        <input type="submit" name="register" class="button"></div></div>
      
      
        <div class="numero">
        <div class="row">
          <div class="col-md-12">  <h4>001 1023 567 - cva.250199@gmail.com<h4></h4></div>
        </div>
          
                               
           
          
          </div>
          
          


      </form>
        
      
         
        
      
    </section>
      <?php
        include("registrar.php")
      ?>
</body>
</html>