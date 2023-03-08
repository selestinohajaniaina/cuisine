<?php
    require("../db.php");
    $sup = $db -> prepare("DELETE FROM categorie WHERE codeCa=:code");
    $sup -> execute([
        "code"=>$_GET["code"],
    ]);
    // header('location:../categorie');
?>
<script>
    document.location.href="/categorie";
</script>