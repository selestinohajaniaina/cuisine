<p>
        Veillez ajouter votre nouveaux produits:
    </p>
<form method="post" class="flex flex-col p-2">

    <div class="flex">

                <div>
                <div class='text-blue-600 text-[7pt] text-center'>libellé:</div>
                <input type="text" name="produit" class="m-px w-full text-center border-solid border-2 border-blue-500 overflow-hidden" placeholder="libelle">
                </div>

                <div>
                    <div class='text-blue-600 text-[7pt] text-center'>categorie:</div>
                    <?php require("listeCat.php")?>
                </div>

                <div>
                <div class='text-blue-600 text-[7pt] text-center'>unité:</div>
                <select name="unite" class="m-px w-full outline-none text-center border-solid border-2 border-blue-500 overflow-hidden">
                    <option value="L">Litre</option>
                    <option value="kg">Kg</option>
                </select>
                </div>

    </div>

    <div>
    <input type="submit" value="valider" name="submit" class="m-px w-full bg-blue-300 border-solid border-2 border-blue-500 overflow-hidden">
    </div>

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