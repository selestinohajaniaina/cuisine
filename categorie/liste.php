<div class=" flex flex-col items-center">
<?php
    $select = $db -> prepare("SELECT * FROM categorie order by libelleCa");
    $select -> execute();
    $fetch = $select -> fetchAll();
    $nbr = count($fetch);
    ?>
    <table>
        <tr class="bg-blue-300">
            <td class="border-solid border-2 border-gray-300">Code</td><td class="text-center border-solid border-2 border-gray-300">Nom</td>
        </tr>
        <?php
    for($i=0;$i<$nbr;$i++){
        ?>
        <tr class="border-solid border-2 border-gray-300 text-center">
            <td class="border-solid border-2 border-gray-300"><?=$fetch[$i]["cat_code"]?></td>
            <td class="w-full"><?=$fetch[$i]["libelleCa"]?></td>
            <td class="border-solid border-2 border-gray-300 ">
            <a href="categorie/sup.php?code=<?=$fetch[$i]["codeCa"]?>" class="">
                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10 11V17" stroke="#787878" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M14 11V17" stroke="#787878" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M4 7H20" stroke="#787878" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M6 7H12H18V18C18 19.6569 16.6569 21 15 21H9C7.34315 21 6 19.6569 6 18V7Z" stroke="#787878" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#787878" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            </a>
        </td>
        </tr>
        <?php
    }
?> 
    </table>
</div>