<p>
        Ajouter votre nouveaux recette:
    </p>
<form method="post" class="flex h-[40px] m-2 border-solid border-2 border-blue-500 overflow-hidden">
    <input type="text" name="plat" placeholder="nom" class="text-center outline-none w-full border-solid border-r-2 border-blue-500">
    <input type="submit" value="créer" name="submit" class="bg-blue-300 h-full w-[40%]">
</form>
<?php
    if(isset($_POST["submit"])){

        if(!empty($_POST["plat"])){
        $plat=$_POST["plat"];
        $insert = $db -> prepare("INSERT INTO plat (nom_plat) VALUES (?)");
        $insert -> execute([$plat]);
        header("location:../recette");
        }else{
            echo "<div class='text-red-600 text-[7pt] text-center'>champs vide non valide</div>";
        }
    }
?>