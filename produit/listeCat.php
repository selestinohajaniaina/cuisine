    <?php
    $select = $db -> prepare("SELECT * FROM categorie");
    $select -> execute();
    $fetch = $select -> fetchAll();
    $nbr = count($fetch);

    ?>
    <select name="categorie" class="text-center w-full outline-none">
    <?php
    for($i=0;$i<$nbr;$i++){
    ?>
    <option value="<?=$fetch[$i]["cat_code"]?>"><?=$fetch[$i]["cat_code"]?></option>
    <?php
    }
    ?>
    </select>