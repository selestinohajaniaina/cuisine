<br>
<table class="w-full">
<tr>
<form method="post" class="flex flex-col p-2">


                <td class="border-solid border-2 border-gray-300">
                <input type="text" name="produit" class="m-px w-full text-center " placeholder="libelle">
                </td>


                <td class="border-solid border-2 border-gray-300">
                    <select name="unite" class="m-px w-full outline-none text-center ">
                        <option value="L">Litre</option>
                        <option value="kg">Kg</option>
                        <option value="pcs">piece</option>
                    </select>
                </td>
                
                <td class="border-solid border-2 border-gray-300">
                    <?php require("listeCat.php")?>
                </td>

    <td class="border-solid border-2 border-gray-300 ">
        <button type="submit" name="submit" class="h-full w-full">
            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 12L12 12M12 12L17 12M12 12V7M12 12L12 17" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <circle cx="12" cy="12" r="9" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></circle> </g></svg>
        </button>
    </td>

</form>
</tr>
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