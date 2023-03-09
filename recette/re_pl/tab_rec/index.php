<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../output.css">
</head>
<body class="font-medium">


<?php
    require('../../../db.php');
    $cd_=$_GET['cd_'];
    $per_=$_GET['per_'];
    $selectp = $db -> prepare("select * FROM plat where id_plat=$cd_");
    $selectp -> execute();
    $fetch = $selectp -> fetch();
    $nom1=$fetch["nom_plat"];
    $nom="Recette pour ".$fetch["nom_plat"];
    require('retour.php');
?> 
<p>
    Voici la recette du <span class="text-green-500"><?=$nom1?></span> pour <b><?=$per_?></b> personne(s):
</p>
<br>

<div>
<?php
    $list_pro_pl = $db -> prepare("SELECT * FROM detailplat WHERE id_plat=$cd_ ORDER BY libellePro");
    $list_pro_pl -> execute();
    $fetch_pro_pl = $list_pro_pl -> fetchAll();
    $_pro_nbr = count($fetch_pro_pl);
    for($i=0;$i<$_pro_nbr;$i++){
        $pro_uni=$fetch_pro_pl[$i]["libellePro"];
        $table_pro_uni=explode("=",$pro_uni);
        $produit=$table_pro_uni[0];
        $qte=$fetch_pro_pl[$i]["qte"];
        ?>
            <b class="text-green-500"><?=$qte*$per_?> <?=$table_pro_uni[1]?></b> : <?=$produit?>  <br>

        
        <?php
    }
    ?>
</div>
    


</div>
</body>
</html>


