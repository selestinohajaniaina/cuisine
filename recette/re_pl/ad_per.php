<p>
        Veillez ajouter le nombre du personne:
    </p>
<form method="post" class="flex h-[50px] m-2 rounded-full border-solid border-2 border-blue-500 overflow-hidden">
    <input type="number" name="personne" placeholder="nombre du personne" autocomplete=off class="text-center outline-none w-full">
    <input type="submit" value="obtenir" name="submit" class="bg-gray-100 h-full w-[40%]">
</form>
<?php
    if(isset($_POST["submit"])){

        if(!empty($_POST["personne"])){
        $per_=$_POST["personne"];
        // $cd_=$_GET['cd_'];
        header("location:./re_pl/tab_rec?cd_=$cd_&per_=$per_");
        }else{
            echo "<div class='text-red-600 text-[7pt] text-center'>champs vide non valide</div>";
        }
    }
?>