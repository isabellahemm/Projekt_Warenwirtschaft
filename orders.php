<?php
	include 'db.php';
	$sql = "SELECT kunde_lieferant.Name AS Kundenname, bestellung.Bestell_ID, ware.Name, bestellung.Menge, bestellung.Menge * ware.Verkaufspreis AS Warenwert
FROM bestellung, ware, kunde_lieferant
WHERE bestellung.Waren_ID = ware.Waren_ID 
AND bestellung.kunde_lieferant_ID = kunde_lieferant.kunde_lieferant_ID
AND kunde_lieferant.Kennung = 0
ORDER BY kunde_lieferant.Kennung, bestellung.Bestell_ID DESC";
	$result = mysqli_query($connection,$sql) or die ("Fehlgeschlagen! SQL-Error:".mysqli_error($connection));
	$row = mysqli_fetch_assoc($result);
	echo "Lieferung von ".$row["Kundenname"].".";
	$result = mysqli_query($connection,$sql) or die ("Fehlgeschlagen! SQL-Error:".mysqli_error($connection));
	echo "<table id='stock'><tr><th>Bestell_ID</th><th>Warenname</th><th>Menge</th><th>Warenwert</th></tr>";
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["Bestell_ID"]."</td><td>".$row["Name"]."</td><td>".$row["Menge"]."</td><td>".$row["Warenwert"]."€</td></tr>";
    }
echo "</table>";
$result = mysqli_query($connection,$sql) or die ("Fehlgeschlagen! SQL-Error:".mysqli_error($connection));
$gesamtwert = 0;

while ($row = mysqli_fetch_assoc($result)) {
  $gesamtwert += $row["Warenwert"];
}
	echo "Der Kunde hat Ware im Wert von ".$gesamtwert."€ bestellt.";
?>