<div>
    <p>
        Veillez ajouter votre nouveaux categories:
    </p>
<form method="post" class="flex h-[50px] m-2 rounded-full border-solid border-2 border-blue-500 overflow-hidden">
    <input type="text" name="categorie" class="outline-none text-center" placeholder="nom du categorie"/>
    <input type="submit" value="Ajouter" class="bg-gray-100 h-full w-full" name="submit"/>
</form>
 
<?php
    if(isset($_POST["submit"])){
        if(!empty($_POST["categorie"])){
            $insert = $db -> prepare("INSERT INTO categorie (libelleCa) VALUES (?)");
            $insert -> execute([$_POST["categorie"]]);
            header("location:../categorie");
        }else{
            echo ("<div class='text-red-600 text-[7pt] text-center'>champs vide non valide</div>");
        }
    }
?>
</div>