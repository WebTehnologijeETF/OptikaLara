<?php
    $ime = $_GET['ime'];
    $datum = $_GET['datum'];
    $email = $_GET['mail'];
    $razlog = $_GET['razlog'];
    $artikal = $_GET['artikal'];
    $naslov = $_GET['naslov'];
    $poruka = $_GET['poruka'];
?>

<!DOCTYPE html>

<html lang="en">
    <body>
        <link rel="stylesheet" type="text/css" href="stil.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                    <h2>KONTAKT FORMA</h2> <br>
                    <form name="formica" action="kontakt.php" method="get"> 
                    <!-- onsubmit="return validacija()"> -->
                    <label class="kontakt">*Ime i prezime: </label>
                    <input type="text" class="kontakt1" id="ime" name="ime" value="<?php echo htmlentities($ime) ?>">
                    <div class="greske">
                        <?php
                            if ($imeOK == 0)
                            {
                                print '<img id="ime-warning" src="http://icons.iconarchive.com/icons/danrabbit/elementary/128/Button-warning-icon.png" alt="ime_prezime">';
                                print 'Morate unijeti ime i prezime!';
                            }
                        ?>  
                          <!-- onmouseover ="return prikaziTekstIme()" onmouseout="return sakrijTekstIme()"-->
                    </div> <br><br>
                             <label class="kontakt">Datum rođenja: </label>
                    <input type="date" name="datum" class="kontakt1" name="datum" value="<?php echo htmlentities($datum) ?>"><br><br>
                    <label class="kontakt">*E-mail: </label>
                    <input type="email" name="mail" class="kontakt1" id="email" value="<?php echo htmlentities($email) ?>">
                       <div class="greske">
                         <?php
                            if ($emailOK == 0)
                            {
                                print '<img id="email-warning" src="http://icons.iconarchive.com/icons/danrabbit/elementary/128/Button-warning-icon.png" alt="email">';
                                print 'Morate unijeti validan e-mail (primjer@hotmail.com)!';
                            }
                        ?> 
                        </div>    <br><br>
              <!--      <label class="kontakt">Općina: </label>
                    <input type="text" class="kontakt1" id="opcina"><br><br>
                    <label class="kontakt">Mjesto: </label>
                    <input type="text" class="kontakt1" id="mjesto"><p id="greska"></p><br> -->
                    <label class="kontakt">Razlog obraćanja: </label>
                    <select name="razlog" class="kontakt1" id="razlog"> <!--onchange="reklamacija()" //koristi JavaScript pa zakomentarisano za potrebe 4.spirale -->
                        <option value="pohvala">Pohvala</option>
                        <option value="reklamacija">Reklamacija</option>
                        <option value="kritika">Kritika</option>
                        <option value="drugo">Drugo</option>
                        <?php          
                             if(isset($razlog))
                             echo htmlentities($razlog)
                         ?> 
                    </select> <br><br>
                       <label class="kontakt" id="label_artikal">Artikal: </label> 
                    <input type="text" id="artikal" class="kontakt1" name="artikal" value="<?php echo htmlentities($artikal) ?>">
                       <div class="greske">
                         <?php
                            if ($artikalOK == 0)
                            {
                                print '<img id="artikal-warning" src="http://icons.iconarchive.com/icons/danrabbit/elementary/128/Button-warning-icon.png" alt="artikal">';
                                print 'Morate unijeti artikal koji reklamirate!';
                            }
                            if ($artikalOK == 1 && $_GET['razlog'] == 'pohvala' || $artikalOK == 1 && $_GET['razlog'] == 'kritika' || $artikalOK == 1 && $_GET['razlog'] == 'drugo')
                            {
                                print '<img id="artikal-warning" src="http://icons.iconarchive.com/icons/danrabbit/elementary/128/Button-warning-icon.png" alt="artikal">';
                                print 'Artikal se može unijeti samo u slučaju reklamacije!';
                            }
                            ?> 
                       </div> <br><br> 
                    <label class="kontakt">*Naslov: </label> 
                    <input type="text" id="naslov" class="kontakt1" name="naslov" value="<?php echo htmlentities($naslov) ?>">
                        <div class="greske">
                         <?php
                            if ($naslovOK == 0)
                            {
                                print '<img id="naslov-warning" src="http://icons.iconarchive.com/icons/danrabbit/elementary/128/Button-warning-icon.png" alt="naslov">';
                                print 'Morate unijeti naslov poruke!';
                            }
                        ?> 
                        </div> <br><br>
                    <label class="kontakt">*Poruka: </label> <br>
                    <textarea rows="10" cols="50" id="poruka" name="poruka">
                         <?php          
                             if(isset($poruka))
                             echo htmlentities($poruka)
                         ?> 
                    </textarea>
                        <div class="greske">
                        <?php
                            if ($porukaOK == 0)
                            {
                                print '<img id="poruka-warning" src="http://icons.iconarchive.com/icons/danrabbit/elementary/128/Button-warning-icon.png" alt="poruka">';
                                print 'Morate unijeti sadržaj poruke!';
                            }
                        ?> 
                        </div> <br><br>
                    <input type="submit" name="OK" value="Potvrdi" id="potvrdi">
                    <input type="button" name="NOK" value="Poništi" id="ponisti"><br><br><br><br><br><br>
                    <p id="tekstic">Sva polja označena sa * su obavezna za unos.<br><br><br></p>
                        </form>
    </body>
</html>

