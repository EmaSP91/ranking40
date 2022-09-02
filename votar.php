<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Votar</title>
</head>
<body class="votar-background" >
    <header>  
    <nav class="nav-container ">
            <img class="logo"src="img/logo.png" alt="logo musica">
            <ul class="links">
                <li><a class="active-home" href="index.html">Inicio</a></li>
                <li><a href="votar.php">Votar</a></li>
                <li><a href="lista.html">Lista</a></li>
            </ul>
            <div class="menu"><div class="bar"></div></div>
        </nav>
    </header>
    <main>
        <section>
           
            <form  action="votos.php">
                <div class="votar-form" >


                  <input type="text" placeholder="Nombre" name="Nombre" required>

                   <!--Selector de canciones y sus respectivos votos-->

                  <div class="select-container">
                    
                  <select name="cancion1" id="song-select">
                    <option value="" selected disabled>Elige una canción...</option>  
                    <option value="">Bad Omens - Limits</option>
                    <option value="">Heroes del silencio - Maldito Duende</option>
                    <option value="">Acru</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                  </select>

                  <select name="voto1" id="song-select">
                   <option value="" selected disabled>Votos</option>
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5</option>
                    <option value="">6</option>
                    <option value="">7</option>
                    <option value="">8</option>
                    <option value="">9</option>
                    <option value="">10</option>
                  </select>
                     
                  
                  </div>

                  <div class="select-container">

                  <select name="cancion2" id="song-select">
                  <option value="" selected disabled>Elige una canción...</option>  
                    <option value="">Bad Omens - Limits</option>
                    <option value="">Heroes del silencio - Maldito Duende</option>
                    <option value="">Acru</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                  </select>

                  <select name="voto2" id="song-select">
                  <option value="" selected disabled>Votos</option>
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5</option>
                    <option value="">6</option>
                    <option value="">7</option>
                    <option value="">8</option>
                    <option value="">9</option>
                    <option value="">10</option>
                  </select>





                  </div>


                  <div class="select-container">
                    



                  </div>


                  <div class="select-container">
                    



                  </div>



                  <div class="select-container">
                    



                  </div>







                </div>




            </form>
        </section>

    </main>

    <footer >
        <img class="molo" src="img/molo.png" alt="">
        <div class="line-container"><div class="line"></div></div>
        <h4>Todos los derechos reservados. Desarrollado por Ema Aliaga &copy;</h4>
    </footer>
    <script src="script.js">
    </script>
</body>
</html>