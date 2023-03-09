<?php
    $selectp = $db -> prepare("select * FROM plat order by id_plat desc");
    $selectp -> execute();
    $fetch = $selectp -> fetchAll();
    $nbr = count($fetch);
    for($i=0;$i<$nbr;$i++){
        ?>
        

        <div class="border-solid border-2 border-gray-300 w-full flex justify-center m-[3px] rounded-full relative overflow-hidden">
            <a href="./re_pl?cd_=<?=$fetch[$i]["id_plat"]?>" class="w-full text-center">
                <p>
                <?=$fetch[$i]["nom_plat"]?>
                </p>
            </a>
        </div>
        <?php
    }
?>