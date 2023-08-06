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

        <?php include "../Controller/home_to_subController.php" ?>


        <?php foreach ($result as $sub_category) { ?>

            <div class="w-24 h-24 rounded-xl drop-shadow bg-gray-100 relative mt-1 cate_item" id="cate_<?= $sub_category["id"] ?>">
                <div class="w-12 h-12 rounded-full bg-black absolute top-1 left-6"></div>
                <p class="text-center text-xs mt-14" name="catename"><?= $sub_category["sub_category_name"] ?></p>
            </div>
        <?php } ?>
    </div>
    <div class=" lg:w-11/12 w-full lg:h-60  h-40 flex justify-evenly flex-wrap mx-auto">

        <?php
       include"../Controller/home_to_subProductController.php";
       
       foreach ($productresult as $products) {
        # code...
       
       $rating = $products["product_rating"];
       if(($products["p_discount"])!=null){

        $price =$products["p_sell_price"] - ((($products["p_discount"])/100 )  * ($products["p_sell_price"]) ) ;
     }else $price = $products["p_sell_price"];
       ?>
           
        
            <!-- products card -->
            <a href="./detailpage.php?productid=<?=$products["id"]?>" class="lg:w-60 w-40 h-full bg-white drop-shadow-md mt-2" id="<?= $products["id"]?>">
                <!-- product image -->
                <div class="w-full lg:h-2/3 h-3/5 relative">
                </div>
                <!-- product information -->
                <div class="flex justify-evenly lg:h-1/3 h-2/5 bg-yellow-50">
                    <div>
                        <p class="text-center lg:text-[13px] font-semibold text-[11px]"><?=$products["p_title"]?></p>
                        <p class=" lg:block text-xs text-center hidden "><?=$products["p_des"]?></p>
                    <?php if(($products["p_discount"])!=null){?> <p class="text-orange-500 lg:text-xs text-[9px] mt-2 ml-2"><?=$products["p_discount"]?><span>%off</span></p><?php }?>
                    </div>
                    <div>
                        <div class="flex mt-1 ml-3 text-orange-500">
                            <ion-icon name="star-outline" class="lg:w-3 lg:h-3 w-2 h-2 mr-[1px]"></ion-icon>
                            <ion-icon name="star-outline" class="lg:w-3 lg:h-3 w-2 h-2 mr-[1px]"></ion-icon>
                            <ion-icon name="star-outline" class="lg:w-3 lg:h-3 w-2 h-2 mr-[1px]"></ion-icon>
                            <ion-icon name="star-outline" class="lg:w-3 lg:h-3 w-2 h-2 mr-[1px]"></ion-icon>
                            <ion-icon name="star-outline" class="lg:w-3 lg:h-3 w-2 h-2 mr-[1px]"></ion-icon>

                        </div>
                        <p class=" text-center lg:text-[13px] text-[11px] font-semibold text-orange-500 mt-1 w-16 ml-1">Ks <span><?=$price?></span></p>
                        <?php if(($products["p_discount"])!=null){?>
                        <p class="lg:text-xs text-center line-through text-[9px]">Ks <span><?= $products["p_sell_price"]?></span></p> <?php } ?>

                    </div>
                </div>
            </a>
       <?php }?>

        
    </div>
</body>

</html>