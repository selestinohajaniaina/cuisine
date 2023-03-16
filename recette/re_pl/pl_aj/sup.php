<?php
    require("../../../db.php");
    $id_plat=$_GET["cd_"];
    $per_=$_GET["per_"];
    $code=$_GET["code"];
    
    $sup = $db -> prepare("DELETE FROM detailplat WHERE id=:code");
    $sup -> execute([
        "code"=>$code,
    ]);
    // header('location:../categorie');
?>
<script>
    document.location.href="../pl_aj?cd_=<?=$id_plat?>&per_=<?=$per_?>";
</script>