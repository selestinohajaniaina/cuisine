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

<div class="w-[90%] flex justify-center">


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
</body>
</html>


