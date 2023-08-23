<?php if (!isset($_GET["productid"])) {
    header("Location: ./errorshow.php");
} ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./resources/lib/jquery/jquery.js"></script>
    <script src="./resources/js/menu.js"></script>
    <script src="./resources/js/detailslide.js" defer></script>
    <script src="./resources/js/addtoCart.js?id=<?= time() ?>"></script>
    <script src="./resources/js/Qty.js?id=<?= time() ?>"></script>
    <title>Document</title>
</head>

<body>
    <!--navgation and header session start-->

    <?php include "./common/nav_without_search.php" ?>


    <div class="flex lg:flex-row flex-col lg:mx-5 mx-0 my-5 overflow-x-hidden">

        <?php include "../Controller/detailController.php";

        if (($productDetail_result[0]["p_discount"]) != null) {

            $price = ($productDetail_result[0]["p_sell_price"]) - ((($productDetail_result[0]["p_discount"]) / 100) * ($productDetail_result[0]["p_sell_price"]));
        } else {

            $price = ($productDetail_result[0]["p_sell_price"]);
        }
        $photo1 = ($productDetail_result[0]["p_photo_1"]);
        $photo2 = ($productDetail_result[0]["p_photo_2"]);
        $photo3 = ($productDetail_result[0]["p_photo_3"]);
        $photo4 = ($productDetail_result[0]["p_photo_4"]);




        ?>
        <!--detail products-->
        <div class="lg:mx-10 mx-4">
            <!--detail products image session-->
            <div class="lg:w-96 lg:h-80 w-full h-52 overflow-x-hidden flex bg-gray-200 relative">
                <?php if ($photo1 != null) { ?>
                    <img src="../..<?= $photo1  ?>" alt="photo_1" class="inline w-full h-full detail_image "> <?php } ?>

                <?php if ($photo2 != null) { ?>
                    <img src="../..<?= $photo2  ?>" alt="photo_2" class="hidden h-full w-full detail_image"> <?php } ?>

                <?php if ($photo3 != null) { ?>
                    <img src="../..<?= $photo3  ?>" alt="photo_3" class="hidden h-full w-full detail_image"> <?php } ?>

                <?php if ($photo4 != null) { ?>
                    <img src="../..<?= $photo4  ?>" alt="photo_4" class="hidden h-full w-full detail_image"> <?php } ?>

                <div class=" rounded-full absolute w-6 h-6   bg-gray-700 top-1/2 left-0" id="backward">
                    <ion-icon name="chevron-back-outline" class="scale-150 p-1 text-white"></ion-icon>
                </div>
                <div class=" rounded-full w-6 h-6 absolute  bg-gray-700 top-1/2  right-0" id="forward">
                    <ion-icon name="chevron-forward-outline" class="scale-150 p-1 text-white"></ion-icon>
                </div>
            </div>
            <div class="flex justify-between lg:mt-4 mt-2">
                <div>
                    <div class="flex text-orange-500">
                        <ion-icon name="heart-outline" class="lg:w-7 w-4 lg:h-7 h-4 mr-1"></ion-icon>
                        <ion-icon name="card-outline" class="lg:w-7 w-4 lg:h-7 h-4 mr-1"></ion-icon>
                        <ion-icon name="chatbubble-ellipses-outline" class="lg:w-6 w-4 lg:h-6 h-4 mr-1"></ion-icon>
                    </div>
                    <div class="flex mt-3  text-orange-500">

                        <?php if ($product_rating_no != null) {

                            for (
                                $i = 0;
                                $i < $product_rating_no;
                                $i++
                            ) { ?>

                                <ion-icon name="star" class="lg:w-5 w-3 lg:h-5 h-3 mr-[2px]"></ion-icon>
                        <?php }
                        } ?>
                    </div>

                </div>

                <!-- product prices-->
                <div>
                    <p class="text-orange-500 lg:text-lg text-sm font-bold">Ks <span><?= $price ?></span></p>
                    <!-- promotion  prices-->

                    <?php if (($productDetail_result[0]["p_discount"]) != null) { ?>
                        <p class="opacity-50 lg:text-lg text-sm"><span class="line-through">Ks </span>
                            <span class="line-through"><?= $productDetail_result[0]["p_sell_price"] ?></span>
                            <span class="text-orange-500"><?= $productDetail_result[0]["p_discount"] ?>%off</span>
                        </p>
                    <?php } ?>


                </div>
                <div class="flex items-center w-28 justify-evenly float-right">
                <p>Qty</p>
                <div class="w-3 h-3 bg-green-700  relative  rounded-sm" id="remove">
                <ion-icon name="remove-outline" class="w-full h-full absolute text-white font-bold"></ion-icon>
                </div>
                <p id="qty">1</p>
                <div class="w-3 h-3 bg-green-700  relative  rounded-sm" id="add">
                <ion-icon name="add-outline" class="w-full h-full absolute text-white font-bold"></ion-icon>
                </div> 
            </div>

               </div>
        

            


        </div>
        <!-- product description-->
        <div class="lg:w-1/2 w-11/12 ml-2 ">
            <p class="lg:text-2xl text-sm mt-2 font-semibold"> <?= $productDetail_result[0]["p_title"] ?></p>
            <p class="lg:text-2xl text-sm font-semibold"><?= $productDetail_result[0]["p_des"] ?></p>
            <div class="w-full lg:h-32 h-20 mt-2 ring-1 overflow-y-auto">

                <p class="lg:text-[11px] text-[9px] p-2"><?= $productDetail_result[0]["p_detail"] ?></p>

            </div>
            <div class="flex justify-evenly mt-5">

                        <form action="../Controller/buynowController.php" method="post" class="lg:w-1/3  w-2/5 ">
                            <input type="hidden" name="productid" value=<?= $product_id ?>>
                            <input type="hidden" name="quantity" value="1" id="p_qty">
                <input type="submit" value="Buy Now" class=" w-full h-8  bg-orange-500 rounded-md text-white text-center py-[2px]">
                 
                </form>

                <a href="../Controller/addto_cartController.php?productid=<?= $product_id ?>" class="lg:w-1/3 w-2/5 h-8 bg-green-800 rounded-md text-white text-center py-[2px]">Add To Cart</a>





            </div>
            <!--review sessions-->
            <?php if ($review_result != null) { ?>
                <div class="mt-5 w-full">
                    <p class="lg:text-lg mb-2 text-sm">Reviews</p>
                    <!--customer reviews-->
                    <div class="lg:w-4/5 w-11/12 mx-2">
                        <div class="flex">
                            <div class="w-8 h-8 rounded-full bg-black mx-1">
                                <img src="../..<?php $all_review["c_profile"] ?>" alt="">
                            </div>
                            <p class="lg:text-base text-sm text-orange-400 "><?= $review_result[0]["c_name"] ?></p>
                        </div>



                        <p class="lg:text-sm ml-8 text-xs text-gray-700">
                            <?= $review_result[0]["product_review"] ?>
                        </p>


                    </div>
                    <a href="./ProductReveiw.php?productid=<?= $product_id ?>" class="float-right text-xs font-medium text-orange-500 lg:mr-20">See all reviews..</a>


                </div>
            <?php } ?>

        </div>
    </div>
    <!--you may also like session-->
    <div class="lg:ml-10 ml-0 w-full mb-5">
        <p class=" lg:text-xl text-sm font-semibold ml-4 mb-4">You may also like</p>

        <div class=" w-full flex flex-wrap">
            <?php foreach ($category_result as $products) {
                # code...

                $rating = $products["product_rating"];
                if (($products["p_discount"]) != null) {

                    $price = $products["p_sell_price"] - ((($products["p_discount"]) / 100)  * ($products["p_sell_price"]));
                } else $price = $products["p_sell_price"];
            ?>


                <a href="./detailpage.php?productid=<?= $products["id"] ?>" class="lg:h-60 h-40 lg:w-60 w-40 bg-white drop-shadow-md mt-2 lg:ml-5 ml-2" id="<?= $products["id"] ?>">
                    <!-- product image -->
                    <div class="w-full lg:h-2/3 h-3/5 relative bg-gray-200">
                        <img src="../..<?= $products["p_photo_1"] ?>" alt="" class="w-full h-full">
                    </div>
                    <!-- product information -->
                    <div class="flex justify-evenly lg:h-1/3 h-2/5 bg-yellow-50">
                        <div>
                            <p class="text-center lg:text-[13px] font-semibold text-[11px]"><?= $products["p_title"] ?></p>
                            <p class=" lg:block text-xs text-center hidden "><?= $products["p_des"] ?></p>
                            <?php if (($products["p_discount"]) != null) { ?> <p class="text-orange-500 lg:text-xs text-[9px] mt-2 ml-2"><?= $products["p_discount"] ?><span>%off</span></p><?php } ?>
                        </div>
                        <div>
                            <div class="flex mt-1 ml-3 text-orange-500">

                                <?php if ($products["product_rating"] != null) {

                                    for ($i = 0; $i < $products["product_rating"]; $i++) { ?>

                                        <ion-icon name="star" class="lg:w-3 w-2 lg:h-3 h-2 mr-[2px]"></ion-icon>
                                <?php }
                                } ?>
                            </div>
                            <p class=" text-center lg:text-[13px] text-[11px] font-semibold text-orange-500 mt-1 w-16 ml-1">Ks <span><?= $price ?></span></p>
                            <?php if (($products["p_discount"]) != null) { ?>
                                <p class="lg:text-xs text-center line-through text-[9px]">Ks <span><?= $products["p_sell_price"] ?></span></p> <?php } ?>

                        </div>
                    </div>
                </a>

            <?php } ?>
        </div>
    </div>
    <?php include "./common/commonFooter.php" ?>

</body>

</html>