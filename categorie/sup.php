<?php
    require("../db.php");
    $sup = $db -> prepare("DELETE FROM categorie WHERE cat_id=:code");
    $sup -> execute([
        "code"=>$_GET["code"],
    ]);
    // header('location:../categorie');
?>
<script>
    document.location.href="../categorie";
</script>