<?php
if (!empty ($_POST['Produktnummer']) AND !empty ($_POST['Kunde']) AND !empty ($_POST['Menge']))
{
    include 'db.php';
    $Produktnummer = $_POST["Produktnummer"];
    $Kunde = $_POST["Kunde"];
    $Menge = $_POST["Menge"];


    $sql="Insert Into bestellung (Menge, Waren_ID, kunde_lieferant_ID) Values (-$Menge, $Produktnummer, $Kunde)";
    mysqli_query($connection,$sql) or die ("Fehlgeschlagen! SQL-Error:".mysqli_error($connection));

}?>


<form action="vorlage.php?content=outward" method="POST">


    Kunde: <br />

    <select name="Kunde">
        <?php
        include 'db.php';
        $sql="SELECT * FROM kunde_lieferant WHERE Kennung=0";
        $result=mysqli_query($connection,$sql);
        while ($row=mysqli_fetch_array($result)){
            echo "<option value=' ".$row['kunde_lieferant_ID']. "'>".$row['Name']."</option>";
        }?>

    </select>
    <br />

    Produktname: <br />
    <select name="Produktnummer">
        <?php
        include 'db.php';
        $sql="SELECT * FROM ware";
        $result=mysqli_query($connection,$sql);
        while ($row=mysqli_fetch_array($result)){
            echo "<option value=' ".$row['Waren_ID']. "'>".$row['Name']."</option>";
        }?>

    </select>
    <br />
    Bestellmenge: <br />
    <input type="text" name="Menge" />

    <br /><br />
    <button type="submit">Warenausgang buchen</button>
</form>

