<!DOCTYPE html>
<html lang="en">
 <head>
      <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>¡Resultados de datos!</title>
    </head>
 <script src="https://kit.fontawesome.com/a71707a89a.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="style.css">

<body>
     <div class="dive2">
         <h1>RESULTADOS</h1>
         <img src="muybien.png" alt="muy bien">
         
            <?php
             $Name=$_POST['Name'];
             echo '<p><b>Nombre: </b>'. $Name.'</P>';
             $Edad=$_POST['Edad'];
             echo '<p><b>EDAD: </b>'. $Edad.'</P>';
             $Ciudad=$_POST['Ciudad'];
             echo '<p><b>Ciudad donde vives: </b>'. $Ciudad.'</P>';
             $FechaNac=$_POST['FechaNac'];
             echo '<p><b>Fecha de nacimiento: </b>'. $FechaNac.'</P>';
             $pasatiempos=$_POST['pasatiempos'];
             echo '<p><b>Pasatiempos favorito: </b>'. $pasatiempos.'</P>';
            ?> 
           
           <p class="despedida"><strong>¡BIEN HECHO!</p></strong>

     <div id="popUpOverlay"></div>
         <div id="popUpBox">
             <div id ="box">
                  <i class="fas fa-question-circle fa-5x"></i>
                 <h1>¿Volver a ingresar datos?</h1>
                 <div id="closeModal"></div>
                </div>
            </div>
         <button onclick="Alert.render('¿Volver a ingresar datos?')" class="btn">¡Volver a ingresar!</button>
         <script src="./app.js"></script>
        </div>
    </body>
</html>