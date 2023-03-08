<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="output.css">
    <style>
        #cat{
            background-image:url("img/cat.jpg");
        }
        #pro{
            background-image:url("img/pro.jpg");
        }
        #pla{
            background-image:url("img/pla.jpg");
        }
    </style>
    <script>
        let width = window.innerWidth;
        console.log(width);
    </script>
</head>
<body class="">
    <?php
        require('db.php');
    ?>
    <div class="w-[90%]">
    <div class="bg-red-500 fixed top-0 h-[50px] flex justify-between items-center w-[100%]">
            <div class="w-fit h-fit m-2">
                <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill-rule="evenodd" clip-rule="evenodd" d="M2 7a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1zm0 5a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1zm1 4a1 1 0 1 0 0 2h18a1 1 0 1 0 0-2H3z" fill="#ffffff"></path></g></svg>
            </div>
            <div class="w-fit h-fit">
                <p class="font-bold text-[15pt] text-white">Cuisine</p>
            </div>
            <div class="w-fit h-fit m-2">
                <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(90)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12C18 12.5523 18.4477 13 19 13Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            </div>

    </div>

    <div class="bg-red-500 h-[50px]">
        cuisine
    </div>

    <div class="flex flex-wrap w-full">
    <a href="categorie/" class="w-fit">
        <div class="w-[100px] h-[100px] flex justify-center items-end rounded-lg m-2 shadow-lg overflow-hidden bg-cover bg-center bg-no-repeat border-solid border-2" id="cat">
        <div class="w-full text-center bg-slate-300 opacity-50 font-bold">Categorie</div>
        </div>
    </a>
    <a href="produit/" class="w-fit">
        <div class="w-[100px] h-[100px] flex justify-center items-end rounded-lg m-2 shadow-lg overflow-hidden bg-cover bg-center bg-no-repeat border-solid border-2" id="pro">
        <div class="w-full text-center bg-slate-300 opacity-50 font-bold">Produit</div>
        </div>
    </a>
    <a href="plat/" class="w-fit">
        <div class="w-[100px] h-[100px] flex justify-center items-end rounded-lg m-2 shadow-lg overflow-hidden bg-cover bg-center bg-no-repeat border-solid border-2" id="pla">
        <div class="w-full text-center bg-slate-300 opacity-50 font-bold">Plat</div>
    </div>
    </a>
    </div>
    </div>
    
</body>
</html>