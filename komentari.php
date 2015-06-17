<!DOCTYPE html>

<html lang="en">
    <head>
        <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <meta charset="utf-8" />
        <title> OPTIKA Lara</title>
        <link rel="stylesheet" type="text/css" href="stil.css">
        <link rel="shortcut icon" type="image/x-icon" href="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcT0oED0lGCiDSxwvcTpJMLEDedS6W8n_QUHA6MuB4vLZlBgAxS_MczSYUY" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <script src="AjaxSP.js"></script>
        <script src="ValidacijaForme.js"></script>
        <script src="Stablo.js"></script>
    </head>
    <body>
        <div id="glavni">
        <div id="gornji">    
            <p>OPTIKA <br> Lara</p>
        </div>
            <div id="lijevi_slike">
                    <div id="slika1"></div>
                    <div id="slika2"></div>
                </div>
            
            <div id="lijevi">
                <ul>
                    <li><a onclick="otvori('novosti.php')">Novosti</a></li> 
                    <li><a onclick="otvori('onama.html')">O nama</a></li>
                    <li><a onclick="otvori('cjenovnik.html')">Cjenovnik</a></li>
                    <li><a onclick="otvori('proizvodi.html')">Proizvodi</a></li> 
                    <li><a onclick="otvori('kontakt.html')">Kontakt</a></li> 
                </ul>
 
                <div id="desni">
                 
             <!--     <script>
                      otvori('naslovna.html');
                  </script>-->
                     <?php
                    include 'komentariPrikaz.php'
                    ?>

                    </div>

                <div id="copyright">
                <p>© Larisa Bešić | 2015 | Sva prava pridržana</p>
            </div>
                 </div>
        
             </div>

        
    </body>
</html>

