<?php

    $kontaktForma='';
    $imeOK = 0;
    $naslovOK = 0;
    $emailOK = 0;
    $emailReg = '/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/';  
    $razlogOK = 0;
    $artikalOK = 0;
    $porukaOK = 0;
    $ime = xss($_GET['ime']);
    $email = xss($_GET['mail']);
    $artikal = xss($_GET['artikal']);
    $naslov = xss($_GET['naslov']);
    $poruka = xss($_GET['poruka']);

    if (isset($ime) && preg_replace('/\s+/','', $ime) != '')
    {
        $imeOK = 1;
    }

    if (preg_match($emailReg, $email) && isset($email) && preg_replace('/\s+/','', $email) != '')
    {
        $emailOK = 1;
    }

    if ($_GET['razlog'] == 'reklamacija')
    {
        if (isset($artikal) && preg_replace('/\s+/','', $artikal) != '')
        {
            $artikalOK = 1;
        }
        else
        {
            $artikalOK = 0;
        }
    }

    if ($_GET['razlog'] == 'pohvala')
    {
        if (isset($artikal) && preg_replace('/\s+/','', $artikal) != '')
        {
            $artikalOK = 1;
        }
        else
        {
            $artikalOK = 0;
        }
    }

    if ($_GET['razlog'] == 'kritika')
    {
        if (isset($artikal) && preg_replace('/\s+/','', $artikal) != '')
        {
            $artikalOK = 1;
        }
        else
        {
            $artikalOK = 0;
        }
    }

    if ($_GET['razlog'] == 'drugo')
    {
        if (isset($artikal) && preg_replace('/\s+/','', $artikal) != '')
        {
            $artikalOK = 1;
        }
        else
        {
            $artikalOK = 0;
        }
    }

    if (isset($naslov) && preg_replace('/\s+/','', $naslov) != '')
    {
        $naslovOK = 1;
    }

    if (isset($poruka) && preg_replace('/\s+/','', $poruka) != '')
    {
        $porukaOK = 1;
    }

    if ($imeOK == 1 && $naslovOK == 1 && $porukaOK == 1 && $emailOK == 1)
    {
        if ($_GET['razlog'] == 'reklamacija' && $artikalOK == 1 || $_GET['razlog'] == 'pohvala' && $artikalOK == 0 || $_GET['razlog'] == 'kritika' && $artikalOK == 0 || $_GET['razlog'] == 'drugo' && $artikalOK == 0)
        {
            $kontaktForma = 'FormaOK.php';
        }
        else
        {
            $kontaktForma = 'FormaNOK.php';
        }
    }
    else
    {
        $kontaktForma = 'FormaNOK.php';
    }

    function xss ($podatak)
    {
        $podatak=trim($podatak);
        $podatak=stripcslashes($podatak);
        $podatak=htmlspecialchars($podatak);
        return $podatak;
    }
?>
