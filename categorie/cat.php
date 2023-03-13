<div>
    <p>
        Veillez ajouter votre nouveaux categories:
    </p>
<form method="post" class="flex m-2 border-solid border-2 border-blue-500 ">
    <div class="bg-blue-100 "><input type="text" name="cat_code" class="outline-none text-center w-full border-solid border-r-2 border-blue-500" placeholder="code"/></div>
    <div class="bg-blue-100 "><input type="text" name="categorie" class="outline-none text-center w-full border-solid border-r-2 border-blue-500" placeholder="libelle"/></div>
    <div><input type="submit" value="Ajouter" class="bg-gray-100 w-full" name="submit"/></div>
</form>
 
<?php
    if(isset($_POST["submit"])){
        if(!empty($_POST["categorie"])&&!empty($_POST["cat_code"])){
            $insert = $db -> prepare("INSERT INTO categorie (cat_code, libelleCa) VALUES (?,?)");
            $insert -> execute([$_POST["cat_code"],$_POST["categorie"]]);
            header("location:../categorie");
        }else{
            echo ("<div class='text-red-600 text-[7pt] text-center'>champs vide non valide</div>");
        }
    }
?>
</div>