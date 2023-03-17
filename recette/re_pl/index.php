<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../output.css">
</head>
<body class="font-medium">

<div class="flex justify-center">

<?php
    require('../../db.php');
    $cd_=$_GET['cd_'];
    $selectp = $db -> prepare("select * FROM plat where id_plat=$cd_");
    $selectp -> execute();
    $fetch = $selectp -> fetch();
    $nom=$fetch["nom_plat"];
    require('retour.php');
    require('ad_per.php');
?> 
</div>
</div>
<br>
<p>Remarque:</p>
<br>
<div class="p-1 bg-gray-50">
    <form method="post">
        <div class="flex">
    <div class=" bg-red-500 w-1/4"><input type="number" name="min" class="w-full border-2 text-center" placeholder="minute(s)"></div>
    <div>
        <select name="dif" class="w-full h-full text-center border-2">
            <option value="facile">facile</option>
            <option value="moyenne">moyenne</option>
            <option value="difficile">difficile</option>
        </select>
    </div>
    <div>
    <select name="avi" class="w-full h-full border-2 text-center">
            <option value="⭐">⭐</option>
            <option value="⭐⭐">⭐⭐</option>
            <option value="⭐⭐⭐">⭐⭐⭐</option>
            <option value="⭐⭐⭐⭐">⭐⭐⭐⭐</option>
            <option value="⭐⭐⭐⭐⭐">⭐⭐⭐⭐⭐</option>
        </select>
    </div>
    </div>

<div class="text-center">
    <button type="submit" name="send" class="bg-blue-500 text-white m-2 p-1 rounded-lg">
        Envoyer
    </button>
</div>

</form>
</div>
<?php
    if(isset($_POST["send"])){
        if(!empty($_POST["min"])){
            $min=$_POST["min"];
            $dif=$_POST["dif"];
            $avi=$_POST["avi"];

            $delete = $db -> prepare("DELETE FROM avis WHERE id_plat = :code");
            $delete -> execute([
                "code"=>$cd_
            ]);

            $insert_a = $db -> prepare("INSERT INTO avis(id_plat, temps, dificulte, etoile) VALUE(?,?,?,?)");
            $insert_a -> execute([$cd_, $min, $dif, $avi]);
            echo "<div class='text-blue-600 text-[7pt] text-center'>merci pour votre avis</div>";
        }else{
            echo "<div class='text-red-600 text-[7pt] text-center'>champs vide non valide</div>";
        }
    }
?>
</body>
</html>


