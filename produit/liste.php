<table class="w-full">
    <tr class="text-center">
        <td class="bg-blue-300 border-solid border-2 border-white">Nom</td><td class="bg-blue-300 border-solid border-2 border-white">Categorie</td>
    </tr>
    <?php
    $selectp = $db -> prepare("select * FROM produit order by codePro desc");
    $selectp -> execute();
    $fetch = $selectp -> fetchAll();
    $nbr = count($fetch);
    for($i=0;$i<$nbr;$i++){
        ?>
        <tr class="border-solid border-2 ">

            <td><?=$fetch[$i]["libellePro"]?></td><td> <?=$fetch[$i]["codeCa"]?></td>
        </tr>
        <?php
    }
        ?>
</table>