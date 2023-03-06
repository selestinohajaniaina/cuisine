<form method="post">
    <input type="text" name="categorie" require/>
    <input type="submit" value="sauvegarde" name="submit"/>
</form>

<?php
    if(isset($_POST["submit"])){
        if(!empty($_POST["categorie"])){
            $insert = $db -> prepare("INSERT INTO categorie (libelleCa) VALUES (?)");
            $insert -> execute([$_POST["categorie"]]);
            header("../");
        }else{
            echo ("champs vide non valide");
        }
    }
?>