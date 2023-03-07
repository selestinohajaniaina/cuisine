<form method="post">
    <input type="text" name="plat">
    <input type="submit" value="valider" name="submit">
</form>
<?php
    if(isset($_POST["submit"])){

        if(!empty($_POST["plat"])){
        $plat=$_POST["plat"];
        $insert = $db -> prepare("INSERT INTO plat (nom_plat) VALUES (?)");
        $insert -> execute([$plat]);
        header("location:../plat");
        }else{
            echo "champs vide non valide";
        }
    }
?>