<?php
    $selectp = $db -> prepare("select * FROM plat order by id_plat desc");
    $selectp -> execute();
    $fetch = $selectp -> fetchAll();
    $nbr = count($fetch);
    for($i=0;$i<$nbr;$i++){
        ?>
        <p>
            <a href="plat/pl_aj?cd_=<?=$fetch[$i]["id_plat"]?>">
                <?=$fetch[$i]["nom_plat"]?>
            </a>
        </p>
        <?php
    }
?>