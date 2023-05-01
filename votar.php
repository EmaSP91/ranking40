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
            <a href="index.html"> <img class="logo"src="img/logo.png" alt="logo musica"></a>
            <ul class="links">
                <li><a href="index.html">Inicio</a></li>
                <li><a class="active-home" href="votar.php">Votar</a></li>
                <li><a href="lista.html">Lista</a></li>
            </ul>
            <div class="menu"><div class="bar"></div></div>
        </nav>

        <div class="mobile-nav">
            <a href="index.html">Inicio</a>
            <a href="votar.php">Votar</a>
            <a href="lista.html">Lista</a>
         
       </div>
    </header>
    <main>
        <section>
           
            <form  action="votosformulario.php" method="$_POST" >
                <div class="votar-form" >


                  <input type="text" placeholder="Nombre" name="Nombre" required>

                   <!--Selector de canciones y sus respectivos votos-->
                   <input class="search-song" type="text" placeholder="Buscar Canción">
                  <div class="select-container">
                 
                  <select name="cancion1" id="song-select" class="search-select">
                    <option  selected disabled>Elige una canción...</option>
                    <option value="Bad Omens - Limits">Bad Omens - Limits</option>
                    <option value="Héroes del silencio - Maldito Duende">Héroes del silencio - Maldito Duende</option>
                    <option value="Acru - D1SPARO">Acru</option>
                    <option value="">Gisel - Kara Lupakanmu</option>
                    <option value="">Gem - Light years away</option>
                    <option value="">Francisca Michielin - Sola</option>
                    <option value="">Annalisa - Vincero</option>
                    <option value="">K/DA - POP/STARS</option>
                    <option value="">Myrath - Believer</option>
                    <option value="">Kamelot ft. Eklipse - My confession</option>
                  </select>

                  <select name="voto1" id="song-select"  >
                   <option selected disabled>Votos</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                  </select>
                     
                  
                  </div>

                  <input class="search-song" type="text" placeholder="Buscar Canción">
                  <div class="select-container">

                  <select name="cancion2" id="song-select" class=search-select>
                  <option  selected disabled>Elige una canción...</option>  
                    <option value="Bad Omens - Limits">Bad Omens - Limits</option>
                    <option value="Héroes del silencio - Maldito Duende">Heroes del silencio - Maldito Duende</option>
                    <option value="Acru - D1SPARO">Acru</option>
                    <option value="">Gem - zaijian</option>
                    <option value="">Lisa - Gurunge</option>
                    <option value="">Sim - The Rumbling</option>
                    <option value="">In the Vegas - Let me hear/fear</option>
                    <option value="">Beyond the black - Million lightyears</option>
                    <option value="">Sirenia - Once my light</option>
                    <option value="">Sirenia - Dim days of dolor</option>
                  </select>

                  <select name="voto2" id="song-select">
                  <option  selected disabled>Votos</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                  </select>





                  </div>


                  <div class="select-container">
                    



                  </div>


                  <div class="select-container">
                    



                  </div>



                  <div class="select-container">
                    



                  </div>



                     



                </div>

                <div class="send-container">
                  <button class="btn-send" type="submit">Enviar</button>
                  <button class="btn-send" type="submit">Borrar</button>
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
     <script src="canciones.js">
    </script>
</body>
</html>