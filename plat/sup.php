<h1>123</h1>
<?php
    require("../db.php");
    $sup_pl = $db -> prepare("DELETE FROM plat WHERE id_plat=:cd_plat");
    $sup_pl -> execute([
        "cd_plat"=>$_GET["cd_"],
    ]);
?>
<script>
    document.location.href="../plat";
</script>