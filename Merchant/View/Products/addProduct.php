<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <!-- tailwind -->
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <!-- <link href="../resources/lib/tailwind/output.css" rel="stylesheet"> -->
    <!-- css -->
    <link rel="stylesheet" href="../resources/css/style.css">
    <!-- chartjs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- chart script file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.41.0/apexcharts.min.js" integrity="sha512-bp/xZXR0Wn5q5TgPtz7EbgZlRrIU3tsqoROPe9sLwdY6Z+0p6XRzr7/JzqQUfTSD3rWanL6WUVW7peD4zSY/vQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../resources/js/main.js" defer></script>
</head>

<body>
    <?php include "../Layout/nav.php"; ?>
    <!-- start of right side -->
    <div class=" ml-[400px] px-10 py-5 flex flex-col justify-center items-center mb-10">
        <!-- title of Edit profile -->
        <div class="flex flex-col justify-center items-center">
            <div class="text-orange text-xl text-center font-bold mb-5">Add Product</div>
            <div class="w-[300px] h-[3px] bg-inputBox shadow-3xl"></div>
        </div>
        
        <div class=" mt-10 flex flex-row justify-center">
            <div>
            <form class="space-y-5" action="" method="">
                <!-- Product Name: -->
                <div class="flex flex-row">
                    <label for="name" class="text-xl text-blueText mr-10">Product Name:</label>
                    <input id="name" name="name" type="text" required class="block w-lg rounded-lg border border-blueText px-20 py-2 text-blueText shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-greyText1 text:lg pl-[45px]" placeholder="Name">

                </div>
                <!-- edit Categories -->
                <div class="relative inline-flex">
                    <svg class="fill-blueText w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
                        <path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero" />
                    </svg>
                    <span class="text-blueText text-xl mr-[90px]">Category:</span>
                    <select class="text-left border border-blueText rounded-lg text-blueText pl-10 pr-[180px] py-2 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                        <option>Select Region</option>
                        <option>Red</option>
                        <option>Blue</option>
                        <option>Yellow</option>
                        <option>Black</option>
                        <option>Orange</option>
                        <option>Purple</option>
                        <option>Gray</option>
                        <option>White</option>
                    </select>
                </div>
                <!-- edit Sub Categories -->
                <div>
                    <div class="relative inline-flex">
                        <svg class="fill-blueText w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
                            <path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero" />
                        </svg>
                        <span class="text-blueText text-xl mr-[50px]">Sub Category:</span>

                        <select class="text-left border border-blueText rounded-lg text-blueText pl-10 pr-[160px] py-2 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                            <option>Select Township</option>
                            <option>Red</option>
                            <option>Blue</option>
                            <option>Yellow</option>
                            <option>Black</option>
                            <option>Orange</option>
                            <option>Purple</option>
                            <option>Gray</option>
                            <option>White</option>
                        </select>
                    </div>

                </div>
                <!-- edit Brand -->
                <div class="flex flex-row">
                    <label for="name" class="text-xl text-blueText mr-[115px]">Brand:</label>

                    <input id="name" name="name" type="text" required class="block w-lg rounded-lg border border-blueText px-20 py-2 text-blueText shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-greyText1 text:lg pl-[45px]" placeholder="Brand">
                </div>

                <!-- edit Color -->
                <div class="flex flex-row">
                    <label for="name" class="text-xl text-blueText mr-[120px]">Color:</label>

                    <input id="name" name="name" type="text" required class="block w-lg rounded-lg border border-blueText px-20 py-2 text-blueText shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-greyText1 text:lg pl-[45px]" placeholder="white">
                </div>
                <!-- edit Size -->
                <div class="flex flex-row">
                    <label for="name" class="text-xl text-blueText mr-[130px]">Size:</label>

                    <input id="name" name="name" type="text" required class="block w-lg rounded-lg border border-blueText px-20 py-2 text-blueText shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-greyText1 text:lg pl-[45px]" placeholder="230">
                </div>



                <!-- edit sell Price: -->
                <div class="flex flex-row">
                    <label for="name" class="text-lg text-blueText mr-[95px]">Sell Price:</label>

                    <input id="name" name="name" type="text" required class="block w-lg rounded-lg border border-blueText px-20 py-2 text-blueText shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-greyText1 text:lg pl-[45px]" placeholder="500Ks">
                </div>

                <!-- edit buy Price: -->
                <div class="flex flex-row">
                    <label for="name" class="text-lg text-blueText mr-[95px]">Buy Price:</label>

                    <input id="name" name="name" type="text" required class="block w-lg rounded-lg border border-blueText px-20 py-2 text-blueText shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-greyText1 text:lg pl-[45px]" placeholder="600Ks">
                </div>

                <!-- edit Discount: -->
                <div class="flex flex-row">
                    <label for="name" class="text-xl text-blueText mr-[90px]">Discount:</label>

                    <input id="name" name="name" type="number" required class="block w-lg rounded-lg border border-blueText px-3 py-2 text-blueText shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-greyText1 text:lg pl-[45px]" placeholder="40">
                    <span class="text-xl text-blueText text-center"> % OFF</span>
                </div>

                <!-- edit Description: -->
                <div class="flex flex-row">
                    <label for="name" class="text-xl text-blueText mr-[70px]">Description:</label>

                    <textarea id="name" name="name" type="text" required class="block w-lg rounded-lg border border-blueText px-20 py-2 text-blueText shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-greyText1 text:lg pl-[45px]" placeholder="no234,blockwlo, eoneouewi">
                            </textarea>

                </div>

                

                



            </form>
            </div>
            <!-- start of edit photo -->

            <div class="grid grid-cols-2 gap-4 w-[400px] h-[400px] ml-[100px]">
                    
                    <div class="grid gap-4">
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
                        </div>
                    </div>
                    <div class="grid gap-4">
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
                        </div>
                    </div>
                </div>

                <!-- end of edit photo -->

                
            </div>
            <div class="flex flex-row space-x-20 ml-[900px] mt-10">
                    <div class="mt-6">
                        <button type="button" class="text-button rounded-lg px-[30px] py-1.5 bg-inputBox border border-button  text-xl font-RobotoSlab shadow-sm hover:bg-orange focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange">Cancel</button>
                    </div>
                    <div class="mt-6">
                        <button type="button" class="text-whiteText rounded-lg px-[30px] py-1.5 bg-button border border-button  text-xl font-RobotoSlab shadow-sm hover:bg-orange focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange">Add</button>
                    </div>

                </div>


    </div>


    <!-- end of right side -->


    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
    <!-- <script src="../resources/js/main.js"></script> -->


</body>

</html>