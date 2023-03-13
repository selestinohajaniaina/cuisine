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
<br>
<p>recette pour <span class="font-bold text-green-500"><?=$per_?> personne(s)</span></p>
<br>
<form method="post" class="flex flex-col p-2">
    
<div class="flex">


<div>
    <div class='text-blue-600 text-[7pt] text-center'>produit:</div>
    <select name="produit" class="m-px outline-none text-center border-solid border-2 border-blue-500 w-full overflow-hidden">
        <?php
    for($i=0;$i<$nbr;$i++){
        ?>
    <option value="<?=$fetch[$i]["libellePro"].'='.$fetch[$i]["unite"]?>"><?=$fetch[$i]["libellePro"]?></option>
    <?php
    }
    ?>
    </select>
    </div>


    <div>
    <div class='text-blue-600 text-[7pt] text-center'>variete(*):</div>
    <input type="text" name="variete" class="m-px text-center border-solid border-2 border-blue-500 w-full" placeholder="varieté">
    </div>


    <div>
    <div class='text-blue-600 text-[7pt] text-center'>quantite:</div>
    <input type="text" name="qte" class="m-px text-center border-solid border-2 border-blue-500 w-full" placeholder="en L ou Kg">
    </div>


</div>


    <input type="submit" value="ajouter" name="submit" class="m-px bg-blue-300 border-solid border-2 border-blue-500 overflow-hidden">
    
</form>