<!DOCTYPE html>
<html>

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
    <title>ShopProfile</title>
</head>



<body>
    <?php include "./common/nav_without_search.php"  ?>
 
 <?php include "../Controller/brandProfileController.php" ?>

    <div class="w-2/5 h-16 mx-auto border-b-[2px] border-b-green-800 flex justify-evenly items-center">

        <div class="w-20 h-10"> <img src="./resources/img/photo/asus.png" alt="" class="w-full"></div>
        <p class="text-orange-500 font-bold">ASUS</p>
    </div>

    <div>

        
    </div>

</body>

</html>