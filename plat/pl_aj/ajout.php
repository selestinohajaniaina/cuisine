<?php

    //select nom plat
    $id_plat=$_GET["cd_"];
    $selectpl = $db -> prepare("select * FROM plat where id_plat=$id_plat");
    $selectpl -> execute();
    $fetch = $selectpl -> fetch();
    $nom_plat = $fetch["nom_plat"];

    //select produit
    $selectpr = $db -> prepare("SELECT * FROM produit");
    $selectpr -> execute();
    $fetch = $selectpr -> fetchAll();
    $nbr = count($fetch);
?>
<h1><?=$nom_plat?></h1>

<form method="post">

    <select name="produit">
    <?php
    for($i=0;$i<$nbr;$i++){
    ?>
    <option value="<?=$fetch[$i]["libellePro"]?>"><?=$fetch[$i]["libellePro"]?></option>
    <?php
    }
    ?>
    </select>
    <input type="number" name="qte" placeholder="Quantité en L ou en Kg">
    <input type="submit" value="ajouter" name="submit">
</form>