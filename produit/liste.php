<?php
    $selectp = $db -> prepare("select * FROM produit order by codePro desc");
    $selectp -> execute();
    $fetch = $selectp -> fetchAll();
    $nbr = count($fetch);
    for($i=0;$i<$nbr;$i++){
        ?>
        <p><?=$fetch[$i]["libellePro"]?> <?=$fetch[$i]["codeCa"]?></p>
        <?php
    }
?>