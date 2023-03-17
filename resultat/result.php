<br>
<table>
<tr class="text-center">
        <td class="bg-blue-300 border-solid border-2 border-gray-300">Nom</td>
        <td class="bg-blue-300 border-solid border-2 border-gray-300">Temps min(s)</td>
        <td class="bg-blue-300 border-solid border-2 border-gray-300">Difficulté</td>
        <td class="bg-blue-300 border-solid border-2 border-gray-300">Avis</td>
    </tr>
    <?php
    $selectp = $db -> prepare("select * FROM avis");
    $selectp -> execute();
    $fetch = $selectp -> fetchAll();
    $nbr = count($fetch);
    for($i=0;$i<$nbr;$i++){
        $id_plat=$fetch[$i]["id_plat"];
        $select_r = $db -> prepare("select * FROM plat where id_plat=$id_plat");
        $select_r -> execute();
        $fetch_r = $select_r -> fetch();
        $nom_plat = $fetch_r["nom_plat"];
        ?>
        <tr>

            <td class="border-solid border-2 border-gray-300" ><?=$nom_plat?></td>
            <td class="border-solid border-2 text-center border-gray-300"> <?=$fetch[$i]["temps"]?></td>
            <td class="border-solid border-2 text-center border-gray-300"> <?=$fetch[$i]["dificulte"]?></td>
            <td class="border-solid border-2 text-center border-gray-300"> <?=$fetch[$i]["etoile"]?></td>
            
        </tr>
        
        <?php
    }
        ?>
</table>