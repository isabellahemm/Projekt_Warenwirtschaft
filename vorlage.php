<?php

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="vorlage.css" />
    <title>SAB - Warenwirtschaft</title>
</head>
<body>
<div id="wrapper">
    <div id="header">
        SAB - Warenwirtschaft
    </div>
    <div id='ueberschrift'>
        <h1> Überschrift </h1>
    </div>
    <div id="menu_left">
        <ul>
            <li>Home</li>
            <li><a href="vorlage.php?content=add">Hinzufügen von Waren</a></li>
            <li><a href="vorlage.php?content=remove">Entfernen von Waren</a></li>
            <li><a href="vorlage.php?content=stock">Anzeigen des Warenbestandes</a></li>
            <li><a href="vorlage.php?content=inward">Erfassung von Lieferungen</a></li>
            <li><a href="vorlage.php?content=outward">Erfassung von Bestellungen</a></li>

        </ul>
    </div>
    <div id="content">
        <?php
        $content=(isset($_GET['content']))?$_GET['content']:'home';
        switch($content)
        {
            case "stock":
                include 'stock.php';
                break;
        }
        switch($content)
        {
            case "remove":
                include 'remove.php';
                break;
        }

        switch($content)
        {
            case "add":
                include 'add.php';
                break;
        }

        switch($content)
        {
            case "inward":
                include 'inward.php';
                break;
        }

        switch($content)
        {
            case "outward":
                include 'outward.php';
                break;
        }


        ?>
    </div>
    <div class="clear">
    </div>
    <div id="footer">
        &copy; Lehrstuhl Wirtschaftsinformatik Uni Mainz
    </div>
</div>
</body>
</html>

