    <?php
    $select = $db -> prepare("SELECT * FROM categorie");
    $select -> execute();
    $fetch = $select -> fetchAll();
    $nbr = count($fetch);

    ?>
    <select name="categorie" class="text-center rounded-full border-solid border-2 border-blue-500 overflow-hidden m-px outline-none">
    <?php
    for($i=0;$i<$nbr;$i++){
    ?>
    <option value="<?=$fetch[$i]["libelleCa"]?>"><?=$fetch[$i]["libelleCa"]?></option>
    <?php
    }
    ?>
    </select>