<p>
        Veillez ajouter votre nouveaux plats:
    </p>
<form method="post" class="flex h-[50px] m-2 rounded-full border-solid border-2 border-blue-500 overflow-hidden">
    <input type="text" name="plat" placeholder="nom du plat" class="text-center outline-none w-full">
    <input type="submit" value="valider" name="submit" class="bg-gray-100 h-full w-[40%]">
</form>
<?php
    if(isset($_POST["submit"])){

        if(!empty($_POST["plat"])){
        $plat=$_POST["plat"];
        $insert = $db -> prepare("INSERT INTO plat (nom_plat) VALUES (?)");
        $insert -> execute([$plat]);
        header("location:../plat");
        }else{
            echo "<div class='text-red-600 text-[7pt] text-center'>champs vide non valide</div>";
        }
    }
?>