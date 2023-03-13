<?php

    //select nom plat
    $id_plat=$_GET["cd_"];
    $per_=$_GET["per_"];
    $selectpl = $db -> prepare("select * FROM plat where id_plat=$id_plat");
    $selectpl -> execute();
    $fetch = $selectpl -> fetch();
    $nom_plat = $fetch["nom_plat"];

    //select produit
    $selectpr = $db -> prepare("SELECT * FROM produit");
    $selectpr -> execute();
    $fetch = $selectpr -> fetchAll();
    $nbr = count($fetch);
    $nom=$nom_plat;
    require('retour.php');
?>

<form method="post" class="flex flex-col p-2">
<div class='text-blue-600 text-[7pt] text-center'>Choisir le produit:</div>
    <select name="produit" class="m-px outline-none text-center border-solid border-2 border-blue-500 overflow-hidden">
    <?php
    for($i=0;$i<$nbr;$i++){
    ?>
    <option value="<?=$fetch[$i]["libellePro"].'='.$fetch[$i]["unite"]?>"><?=$fetch[$i]["libellePro"]?></option>
    <?php
    }
    ?>
    </select>
    <input type="text" name="qte" class="m-px text-center border-solid border-2 border-blue-500 overflow-hidden" placeholder="Quantité en L ou en Kg">
    <input type="submit" value="ajouter" name="submit" class="m-px bg-blue-300 border-solid border-2 border-blue-500 overflow-hidden">
    
</form>