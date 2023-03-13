<table class="w-full">
    <tr class="text-center">
        <td class="bg-blue-300 border-solid border-2 border-gray-300">Nom</td><td class="bg-blue-300 border-solid border-gray-300">Categorie</td>
    </tr>
    <?php
    $selectp = $db -> prepare("select * FROM produit order by codePro desc");
    $selectp -> execute();
    $fetch = $selectp -> fetchAll();
    $nbr = count($fetch);
    for($i=0;$i<$nbr;$i++){
        ?>
        <tr>

            <td class="border-solid border-2 border-gray-300"><?=$fetch[$i]["libellePro"]?></td><td class="border-solid border-2 border-gray-300"> <?=$fetch[$i]["codeCa"]?></td>
        </tr>
        <?php
    }
        ?>
</table>