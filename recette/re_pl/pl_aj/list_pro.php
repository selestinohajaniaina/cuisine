<tr>
        <td class="bg-blue-300 border-solid border-2 border-gray-300">Nom</td>
        <td class="bg-blue-300 border-solid border-2 border-gray-300">Varieté</td>
        <td class="bg-blue-300 border-solid border-2 border-gray-300">Quantite</td>
    </tr>
<?php
    $list_pro_pl = $db -> prepare("SELECT * FROM detailplat WHERE id_plat=$id_plat ORDER BY libellePro");
    $list_pro_pl -> execute();
    $fetch_pro_pl = $list_pro_pl -> fetchAll();
    $_pro_nbr = count($fetch_pro_pl);
    for($i=0;$i<$_pro_nbr;$i++){
        $pro_uni=$fetch_pro_pl[$i]["libellePro"];
        $table_pro_uni=explode("=",$pro_uni);
        $produit=$table_pro_uni[0];
        $quantite=$fetch_pro_pl[$i]["qte"];
        ?>
        <tr >
            <td class="border-solid border-2 border-gray-300 text-left"><?=$produit?> </td>
            <td class="border-solid border-2 border-gray-300">
                <?php
                    // if(!empty($fetch_pro_pl[$i]["variete"])) echo $fetch_pro_pl[$i]["variete"];
                    echo $variete = !empty($fetch_pro_pl[$i]["variete"]) ? $fetch_pro_pl[$i]["variete"] : "";
                ?> 
            </td>
            <td class=" border-solid border-2 border-gray-300"> <?=$quantite*$per_." ".$table_pro_uni[1]?></td>
            <td class="border-solid border-2 border-gray-300">
            <a href="./pl_aj/sup.php?cd_=<?=$id_plat?>&per_=<?=$per_?>&code=<?=$fetch_pro_pl[$i]['id']?>">
                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10 11V17" stroke="#787878" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M14 11V17" stroke="#787878" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M4 7H20" stroke="#787878" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M6 7H12H18V18C18 19.6569 16.6569 21 15 21H9C7.34315 21 6 19.6569 6 18V7Z" stroke="#787878" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#787878" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            </a>
            </td>
        </tr>
        <?php
    }
    ?>
    </table>