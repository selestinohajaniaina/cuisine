<br>
<table>
<tr class="border-solid border-2 border-gray-300 text-center">
<form method="post">

    <td class="border-solid border-2 border-gray-300"><input type="text" name="cat_code" class="h-full outline-none text-center w-full" placeholder="code"/></td>
    <td class="w-full"><input type="text" name="categorie" class="h-full outline-none text-center w-full" placeholder="libelle"/></td>
    <td class="border-solid border-2 border-gray-300">
        <button type="submit" class="bg-gray-100 w-full h-full" name="submit">
        <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 12L12 12M12 12L17 12M12 12V7M12 12L12 17" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <circle cx="12" cy="12" r="9" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></circle> </g></svg>
        </button>
    </td>
</form>
</tr>
 
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