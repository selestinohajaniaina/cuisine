<?php
    if(isset($_POST["submit"])){
        if(!empty($_POST["qte"])){
        $produit=$_POST["produit"];
        $qte=$_POST["qte"];
        $insert = $db -> prepare("INSERT INTO detailplat (id_plat,libellePro,qte) VALUES (?,?,?)");
        $insert -> execute([$id_plat,$produit,$qte]);  
        header("location:../pl_aj?cd_=$id_plat");          
        }else{
            echo "<div class='text-red-600 text-[7pt] text-center'>champs vide non valide</div>";
        }
    }
?>