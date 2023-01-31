<?php
	include 'db.php';
	$sql = "SELECT ware.Waren_ID, ware.Name, SUM(bestellung.Menge) AS SummeMenge, ware.Einkaufspreis, SUM(bestellung.Menge) * ware.Einkaufspreis AS Warenwert FROM ware, bestellung WHERE ware.Waren_ID = bestellung.Waren_ID GROUP BY ware.Name, ware.Einkaufspreis";
	$result = mysqli_query($connection,$sql) or die ("Fehlgeschlagen! SQL-Error:".mysqli_error($connection));
	echo "<table id='stock'><tr><th>Waren_ID</th><th>Warenname</th><th>Summe der Menge</th><th>Einkaufspreis</th><th>Warenwert</th></tr>";
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["Waren_ID"]."</td><td>".$row["Name"]."</td><td>".$row["SummeMenge"]."</td><td>".$row["Einkaufspreis"]."€</td><td>".$row["Warenwert"]."€</td></tr>";
    }
echo "</table>";
?>
