<br>
    <p>
        Ou choisir dans la liste:
    </p>
<?php
    $selectp = $db -> prepare("SELECT * FROM plat order by nom_plat");
    $selectp -> execute();
    $fetch = $selectp -> fetchAll();
    $nbr = count($fetch);
    for($i=0;$i<$nbr;$i++){
        
        ?>

        <div class="border-solid border-2 border-gray-300 w-full flex justify-center m-[3px] rounded-full relative overflow-hidden">
            <a href="../recette/re_pl?cd_=<?=$fetch[$i]["id_plat"]?>" class="w-full text-center">
                <p>
                    <?=$fetch[$i]["nom_plat"]?>
                </p>
            </a>
        </div>
        <?php
    }
?>