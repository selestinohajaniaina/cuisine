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
<table class="w-full text-center">
<tr>
<form method="post" class="flex flex-col p-2">
    


    <td class="border-solid border-2 border-gray-300">
    <select name="produit" class="m-px outline-none text-center w-full overflow-hidden">
        <?php
    for($i=0;$i<$nbr;$i++){
        ?>
    <option value="<?=$fetch[$i]["libellePro"].'='.$fetch[$i]["unite"]?>"><?=$fetch[$i]["libellePro"]?></option>
    <?php
    }
    ?>
    </select>
    </td>


    <td class="border-solid border-2 border-gray-300">
    <input type="text" name="variete" class="m-px text-center w-full" placeholder="varieté">
    </td>


    <td class="border-solid border-2 border-gray-300">
    <input type="text" name="qte" class="m-px text-center w-full" placeholder="en L ou Kg">
    </td>

    <td class="border-solid border-2 border-gray-300 ">
        <button type="submit" name="submit" class="m-px overflow-hidden">
            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 12L12 12M12 12L17 12M12 12V7M12 12L12 17" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <circle cx="12" cy="12" r="9" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></circle> </g></svg>
        </button>
    </td>

    
</form>
</tr>