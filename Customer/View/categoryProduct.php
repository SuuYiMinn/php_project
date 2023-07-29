<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/css/categoryProduct.css">
    <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./resources/lib/jquery/jquery.js"></script>
    <script src="./resources/js/menu.js"></script>
    <title>CategoryProducts</title>
</head>

<body>
    <?php
    include "./common/CommonNavigation.php"
    ?>
    <!-- cathegory-->
    <div class="flex  ml-2 mb-2 mt-2  py-2 overflow-x-auto w-full">


        <div class="w-24 h-24 rounded-xl drop-shadow bg-gray-100 relative ring-2 mx-5 cate_item">
            <div class="w-14 h-14 rounded-full bg-black absolute top-1 left-5"></div>
            <p class="text-center text-xs absolute bottom-1">Health and Beauty</p>

        </div>   
        <div class="w-24 h-24 rounded-xl drop-shadow bg-gray-100 relative ring-2 mx-5 cate_item">
            <div class="w-14 h-14 rounded-full bg-black absolute top-1 left-5"></div>
            <p class="text-center text-xs absolute bottom-1">Health and Beauty</p>

        </div>   
        <div class="w-24 h-24 rounded-xl drop-shadow bg-gray-100 relative ring-2 mx-5 cate_item">
            <div class="w-14 h-14 rounded-full bg-black absolute top-1 left-5"></div>
            <p class="text-center text-xs absolute bottom-1">Health and Beauty</p>

        </div>    

        <div class="w-24 h-24 rounded-xl drop-shadow bg-gray-100 relative ring-2 mx-5 cate_item">
            <div class="w-14 h-14 rounded-full bg-black absolute top-1 left-5"></div>
            <p class="text-center text-xs absolute bottom-1">Health and Beauty</p>

        </div>   
        <div class="w-24 h-24 rounded-xl drop-shadow bg-gray-100 relative ring-2 mx-5 cate_item">
            <div class="w-14 h-14 rounded-full bg-black absolute top-1 left-5"></div>
            <p class="text-center text-xs absolute bottom-1">Health and Beauty</p>

        </div>   
        <div class="w-24 h-24 rounded-xl drop-shadow bg-gray-100 relative ring-2 mx-5 cate_item">
            <div class="w-14 h-14 rounded-full bg-black absolute top-1 left-5"></div>
            <p class="text-center text-xs absolute bottom-1">Health and Beauty</p>

        </div>   
        <div class="w-24 h-24 rounded-xl drop-shadow bg-gray-100 relative ring-2 mx-5 cate_item">
            <div class="w-14 h-14 rounded-full bg-black absolute top-1 left-5"></div>
            <p class="text-center text-xs absolute bottom-1">Health and Beauty</p>

        </div>   

        <div class="w-24 h-24 rounded-xl drop-shadow bg-gray-100 relative ring-2 mx-5 cate_item">
            <div class="w-14 h-14 rounded-full bg-black absolute top-1 left-5"></div>
            <p class="text-center text-xs absolute bottom-1">Health and Beauty</p>

        </div>   

        <div class="w-24 h-24 rounded-xl drop-shadow bg-gray-100 relative ring-2 mx-5 cate_item">
            <div class="w-14 h-14 rounded-full bg-black absolute top-1 left-5"></div>
            <p class="text-center text-xs absolute bottom-1">Health and Beauty</p>

        </div>   
        <div class="w-24 h-24 rounded-xl drop-shadow bg-gray-100 relative ring-2 mx-5 cate_item">
            <div class="w-14 h-14 rounded-full bg-black absolute top-1 left-5"></div>
            <p class="text-center text-xs absolute bottom-1">Health and Beauty</p>

        </div>   

        <div class="w-24 h-24 rounded-xl drop-shadow bg-gray-100 relative ring-2 mx-5 cate_item">
            <div class="w-14 h-14 rounded-full bg-black absolute top-1 left-5"></div>
            <p class="text-center text-xs absolute bottom-1">Health and Beauty</p>

        </div>   
   
        
        
        

    </div>
    <div class="w-full lg:h-60 sm:h-52 flex justify-evenly flex-wrap">

    <?php
        for ($i=0; $i < 5; $i++) { 
            include "./common/commonProductlist.php";
        }
     
    ?>
    </div>
</body>

</html>