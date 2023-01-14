<?php
if (!empty ($_POST['Produktnummer']))
{
    $Produktnummer = $_POST["Produktnummer"];
    include 'db.php';
    $sql="DELETE FROM ware WHERE Waren_ID=$Produktnummer";
    mysqli_query($connection,$sql) or die ("Fehgeschlafen! SQL-Error:".mysqli_error($connection));

}?>


<form action="vorlage.php?content=remove" method="POST">
    <select name="Produktnummer">
        <?php
        include 'db.php';
        $sql="SELECT * FROM ware";
        $result=mysqli_query($connection,$sql);
        while ($row=mysqli_fetch_array($result)){
            echo "<option value=' ".$row['Waren_ID']. "'>".$row['Name']."</option>";
        }?>

    </select>
    <button type="submit">Produkt löschen</button>
</form>
