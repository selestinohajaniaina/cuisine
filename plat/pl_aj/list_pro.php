<table class="w-full">
<tr class="text-center">
        <td class="bg-blue-300 border-solid border-2 border-white">Nom</td><td class="bg-blue-300 border-solid border-2 border-white">Quantite</td>
    </tr>
<?php
    $list_pro_pl = $db -> prepare("SELECT * FROM detailplat WHERE id_plat=$id_plat ORDER BY id DESC");
    $list_pro_pl -> execute();
    $fetch_pro_pl = $list_pro_pl -> fetchAll();
    $_pro_nbr = count($fetch_pro_pl);
    for($i=0;$i<$_pro_nbr;$i++){
        $pro_uni=$fetch_pro_pl[$i]["libellePro"];
        $table_pro_uni=explode("=",$pro_uni);
        $produit=$table_pro_uni[0];
        ?>
        <tr class="border-solid border-2 ">
            <td><?=$produit?> </td> <td class="text-center"> <?=$fetch_pro_pl[$i]["qte"]." ".$table_pro_uni[1]?></td>

        </tr>
        <?php
    }
    ?>
    </table>