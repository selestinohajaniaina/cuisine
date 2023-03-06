<form method="post">
    <input type="text" name="produit">
    <?php require("listeCat.php")?>
    <input type="submit" value="valider" name="submit">
</form>
<?php
    if(isset($_POST["submit"])){

        if(!empty($_POST["produit"])){

        $categorie=$_POST["categorie"];
        $produit=$_POST["produit"];
        $insert = $db -> prepare("INSERT INTO produit (libellePro,codeCa) VALUES (?,?)");
        $insert -> execute([$produit,$categorie]);
        header("location:../produit");
        }else{
            echo "champs vide non valide";
        }
    }
?>