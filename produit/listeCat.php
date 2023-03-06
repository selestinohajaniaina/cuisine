    <?php
    $select = $db -> prepare("SELECT * FROM categorie");
    $select -> execute();
    $fetch = $select -> fetchAll();
    $nbr = count($fetch);

    ?>
    <select name="categorie">
    <?php
    for($i=0;$i<$nbr;$i++){
    ?>
    <option value="<?=$fetch[$i]["libelleCa"]?>"><?=$fetch[$i]["libelleCa"]?></option>
    <?php
    }
    ?>
    </select>