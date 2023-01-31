<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
	$passsword = "test";
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verbindung zur Datenbank herstellen
   $connection = mysqli_connect('localhost', 'ebusiness011', 'wfp1fsCFup',
'ebusiness011');

    // Abfrage vorbereiten
    $query = "SELECT * FROM user WHERE name = '$username' AND passwort = '$password'";

    // Abfrage ausführen
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) === 1) {
        // Benutzer authentifiziert
        $_SESSION['username'] = $username;
        header("Location: vorlage.php?content=add");    //Weiterleitung auf Startseite
        exit;
    } else {
        // Falsche Anmeldedaten
        echo "Falscher Benutzername oder Passwort!";
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="vorlage.css" />
	<title>SAB - Warenwirtschaft</title>
	</head>
	<body>
		<!--<div id="wrapper">-->
			<div id="header">
				SAB - Warenwirtschaft
			</div>
			<div id='ueberschrift'>
				<h1> Überschrift </h1>
			</div>
			<div id="menu_left">
				<a href="vorlage.php?content=add">Hinzufügen von Waren</a>
				<a href="vorlage.php?content=remove">Entfernen von Waren</a>
				<a href="vorlage.php?content=stock">Anzeigen des Warenbestandes</a>
				<a href="vorlage.php?content=inward">Erfassung von Lieferungen</a>
				<a href="vorlage.php?content=outward">Erfassung von Bestellungen</a>
			</div>
				<!--<ul>
					<li>Home</li>
					<li><a href="vorlage.php?content=add">Hinzufügen von Waren</a></li>
					<li><a href="vorlage.php?content=remove">Entfernen von Waren</a></li>
					<li><a href="vorlage.php?content=stock">Anzeigen des Warenbestandes</a></li>
					<li><a href="vorlage.php?content=inward">Erfassung von Lieferungen</a></li>
					<li><a href="vorlage.php?content=outward">Erfassung von Bestellungen</a></li>
					<li><a href="vorlage.php?content=supplies">Liste der Lieferungen</a></li>
					<li><a href="vorlage.php?content=orders">Liste der Bestellungen</a></li>
					<li>Logout</li>
					
				</ul>-->
			</div>
			<div id="password">
				<form method="post">
					<label for="username">Benutzername:</label>
					<input type="text" name="username" id="username">
					<br>
					<label for="password">Passwort:</label>
					<input type="password" name="password" id="password">
					<br>
					<input type="submit" value="Anmelden">
				</form>
			</div>
			<div id="content">
			    <?php
				if (isset($_SESSION['username'])) {
					
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
					case "orders":
						include 'orders.php';
						break;
				}
				switch($content)
				{
					case "supplies":
						include 'supplies.php';
						break;
				}
				switch($content)
				{
					case "outward":
						include 'outward.php';
						break;
				}
				}
			    ?>
				
			</div>
			<div class="clear">
			</div>
			<div id="footer">
				&copy; Lehrstuhl Wirtschaftsinformatik Uni Mainz
			</div>
		<!--</div>-->
	</body>
</html>
