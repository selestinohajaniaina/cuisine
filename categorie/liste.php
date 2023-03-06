<?php
    $select = $db -> prepare("SELECT * FROM categorie");
    $select -> execute();
    $fetch = $select -> fetchAll();
    $nbr = count($fetch);
    for($i=0;$i<$nbr;$i++){
        ?>
        <p><?=$fetch[$i]["libelleCa"]?></p>
        <?php
    }
?>