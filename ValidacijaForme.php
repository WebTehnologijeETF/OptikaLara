<?php
    
    $kontaktForma='';
    $imeOK = 0;
    $naslovOK = 0;
    $emailOK = 0;
    $emailReg = '/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/';  
    $razlogOK = 0;
    $artikalOK = 0;
    $porukaOK = 0;

    if (isset($_GET['ime']) && preg_replace('/\s+/','', $_GET['ime']) != '')
    {
        $imeOK = 1;
    }

    if (preg_match($emailReg, $_GET['mail']) && isset($_GET['mail']) && preg_replace('/\s+/','', $_GET['mail']) != '')
    {
        $emailOK = 1;
    }

    if ($_GET['razlog'] == 'reklamacija')
    {
        if (isset($_GET['artikal']) && preg_replace('/\s+/','', $_GET['artikal']) != '')
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
        if (isset($_GET['artikal']) && preg_replace('/\s+/','', $_GET['artikal']) != '')
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
        if (isset($_GET['artikal']) && preg_replace('/\s+/','', $_GET['artikal']) != '')
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
        if (isset($_GET['artikal']) && preg_replace('/\s+/','', $_GET['artikal']) != '')
        {
            $artikalOK = 1;
        }
        else
        {
            $artikalOK = 0;
        }
    }

    if (isset($_GET['naslov']) && preg_replace('/\s+/','', $_GET['naslov']) != '')
    {
        $naslovOK = 1;
    }

    if (isset($_GET['poruka']) && preg_replace('/\s+/','', $_GET['poruka']) != '')
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
?>
