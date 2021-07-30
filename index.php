<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="estilo.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        window.addEventListener('load',() =>{

            setTimeout(carga, 3000);
            function carga(){
            
            document.getElementById('circulo').className = 'hide';

            document.getElementById('contenido').className = 'center animate__animated animate__slideInDown';}
        })
    </script>
    <title>Document</title>
</head>
<body>
    <div class="center" id="circulo" style="margin-top: 240px;">
        <div class="preloader-wrapper big active" style="width: 150px; height:150px;">
            <div class="spinner-layer spinner-blue">
              <div class="circle-clipper left">
                <div class="circle"></div>
              </div><div class="gap-patch">
                <div class="circle"></div>
              </div><div class="circle-clipper right">
                <div class="circle"></div>
              </div>
            </div>
      
            <div class="spinner-layer spinner-red">
              <div class="circle-clipper left">
                <div class="circle"></div>
              </div><div class="gap-patch">
                <div class="circle"></div>
              </div><div class="circle-clipper right">
                <div class="circle"></div>
              </div>
            </div>
      
            <div class="spinner-layer spinner-yellow">
              <div class="circle-clipper left">
                <div class="circle"></div>
              </div><div class="gap-patch">
                <div class="circle"></div>
              </div><div class="circle-clipper right">
                <div class="circle"></div>
              </div>
            </div>
      
            <div class="spinner-layer spinner-green">
              <div class="circle-clipper left">
                <div class="circle"></div>
              </div><div class="gap-patch">
                <div class="circle"></div>
              </div><div class="circle-clipper right">
                <div class="circle"></div>
              </div>
            </div>
          </div>
    </div>
          <div class="hide" id="contenido">
            <body style="background-color: black;">
                <form method="post">
                    <h1>Registro de Vuelos</h1>
                    <input type="text" name="name" placeholder="Nombre completo">
                    <input type="email" name="email" placeholder="Email">
                    <input type="text" name="dest" placeholder="Destino">
                    <input type="tel" name="telef" placeholder="Numero Telefonico">
            
                    <input  type="submit" name="register">
                </form>
                  
            </body>
            </html>
          </div>
          <?php 
          include("registrar.php");
          ?>
    
</body>
</html>