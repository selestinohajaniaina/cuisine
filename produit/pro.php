<p>
        Veillez ajouter votre nouveaux produits:
    </p>
<form method="post" class="flex flex-col p-2">
    <input type="text" name="produit" class="m-px text-center rounded-full border-solid border-2 border-blue-500 overflow-hidden" placeholder="nom du produit">
    <div class='text-blue-600 text-[7pt] text-center'>Choisir la categorie:</div>
    <?php require("listeCat.php")?>
    <div class='text-blue-600 text-[7pt] text-center'>Choisir l'unité:</div>
    <select name="unite" class="m-px outline-none text-center rounded-full border-solid border-2 border-blue-500 overflow-hidden">
        <option value="L">Litre</option>
        <option value="kg">Kg</option>
    </select>
    <input type="submit" value="valider" name="submit" class="m-px bg-blue-300 rounded-full border-solid border-2 border-blue-500 overflow-hidden">
</form>
<?php
    if(isset($_POST["submit"])){

        if(!empty($_POST["produit"])){

        $categorie=$_POST["categorie"];
        $produit=$_POST["produit"];
        $unite=$_POST["unite"];
        $insert = $db -> prepare("INSERT INTO produit (libellePro,codeCa,unite) VALUES (?,?,?)");
        $insert -> execute([$produit,$categorie,$unite]);
        header("location:../produit");
        }else{
            echo "<div class='text-red-600 text-[7pt] text-center'>champs vide non valide</div>";
        }
    }
?>