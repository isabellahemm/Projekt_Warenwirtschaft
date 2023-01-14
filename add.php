<?php
if (!empty ($_POST['name']) AND !empty ($_POST['ek']) AND !empty ($_POST['vk']))
{
    include 'db.php';
    $name = $_POST["name"];
    $ek = $_POST["ek"];
    $vk = $_POST["vk"];

    $sql="Insert Into ware (Name, Einkaufspreis, Verkaufspreis) VALUES('$name',$ek,$vk)";
    mysqli_query($connection,$sql) or die ("Fehgeschlafen! SQL-Error:".mysqli_error($connection));
}
else{?>
    <form method="POST" action="vorlage.php?content=add" >
        Produktname: <br />
        <input type="text" name="name" />
        <br>
        Einkaufspreis: <br />
        <input type="text" name="ek" />
        <br>
        Verkaufspreis: <br />
        <input type="text" name="vk" />
        <br>
        <input type="submit" value="Ware hinzufügen" name="form" />
    </form>
    <?php
}
?>
