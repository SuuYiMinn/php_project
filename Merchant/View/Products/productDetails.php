<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details </title>
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
    <script src="../resources/lib/jquery/jQuery v3.7.0.js"></script>
</head>

<body>
    <?php include "../Layout/nav.php"; ?>
    <!-- start of right side -->
    <div class="flex flex-row ml-[300px]">
        <div class="fixed text-blueText text-xl font-bold w-[1400px] h-[60px] px-8 py-5 rounded-xl flex flex-row items-center shadow-3xl">
            <form class="">
                <div class="flex justify-center items-center">
                    <label for="search-dropdown" class="mb-2 text-sm font-medium text-blueText sr-only dark:text-white">Your Email</label>
                    <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 font-medium text-center text-blueText bg-gray-100 text-xl rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">All categories <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg></button>
                    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-grayText2 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-xl text-blueText dark:text-gray-200" aria-labelledby="dropdown-button">
                            <li>
                                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-grayText2 dark:hover:bg-gray-600 dark:hover:text-white">Mockups</button>
                            </li>
                            <li>
                                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-grayText2 dark:hover:bg-gray-600 dark:hover:text-white">Templates</button>
                            </li>
                            <li>
                                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-grayText2 dark:hover:bg-gray-600 dark:hover:text-white">Design</button>
                            </li>
                            <li>
                                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-grayText2 dark:hover:bg-gray-600 dark:hover:text-white">Logos</button>
                            </li>
                        </ul>
                    </div>
                    <div class="ml-[100px]">Add Product</div>
                    <div class="relative w-[500px] ml-[400px]">
                        <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-xl text-blueText bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Search Mockups, Logos, Design Templates..." required>
                        <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium h-full text-blueText bg-button rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>

        </div>
        <!-- start of product details -->
        <div class="mt-32 mb-10">
            <div class="flex flex-row space-x-10">
                <div>
                    <img src="../resources/img/product.jpg" class="w-[700px] h-[300px]">
                </div>
                <div class="text-blueText text-xl font-semibold space-y-8">
                    <p><span class="">Product Name:</span> <span class="ml-3">iUNK to tree Serum</span></p>
                    <p><span class="">Brand:</span><span class="ml-3">iUNK</span></p>
                    <p><span>Stock:</span><span class="ml-3">3</span></p>
                    <p><span>Buy Price:</span><span class="ml-3">2300Ks</span></p>
                    <p><span>Sell Price:</span><span class="ml-3">4500Ks</span></p>
                    <p><span>Discount:</span><span class="ml-3">40% Off</span></p>
                    <p><span>Description:</span><span class="ml-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa rem incidunt dicta odit ipsum quasi voluptas illum fuga voluptates. Vitae quis earum neque nobis dolor saepe voluptatum nulla velit inventore.</span></p>
                </div>
            </div>
            <!-- start of rating -->
            <div class="flex items-center mb-2 mt-3">
                <p class="text-blueText text-2xl font-bold mr-5">Ratings</p>
                <svg class="w-4 h-4 text-orange mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-orange mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-orange mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-orange mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-inputBox mr-1 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <p class="ml-2 text-lg text-blueText dark:text-white">4.95 out of 5</p>

            </div>
            <p class="text-xl font-medium text-blueText dark:text-gray-400">1,745 global ratings</p>
            <div class="flex items-center mt-4">
                <a href="#" class="text-xl font-medium text-blueText dark:text-blue-500 hover:underline">5 star</a>
                <div class="w-2/4 h-5 mx-4 bg-inputBox rounded dark:bg-gray-700">
                    <div class="h-5 bg-orange rounded" style="width: 70%"></div>
                </div>
                <span class="text-xl font-medium text-blueText dark:text-gray-400">70%</span>
            </div>
            <div class="flex items-center mt-4">
                <a href="#" class="text-xl font-medium text-blueText dark:text-blue-500 hover:underline">4 star</a>
                <div class="w-2/4 h-5 mx-4 bg-inputBox rounded dark:bg-gray-700">
                    <div class="h-5 bg-orange rounded" style="width: 17%"></div>
                </div>
                <span class="text-xl font-medium text-blueText dark:text-gray-400">17%</span>
            </div>
            <div class="flex items-center mt-4">
                <a href="#" class="text-xl font-medium text-blueText dark:text-blue-500 hover:underline">3 star</a>
                <div class="w-2/4 h-5 mx-4 bg-inputBox rounded dark:bg-gray-700">
                    <div class="h-5 bg-orange rounded" style="width: 8%"></div>
                </div>
                <span class="text-xl font-medium text-blueText dark:text-gray-400">8%</span>
            </div>
            <div class="flex items-center mt-4">
                <a href="#" class="text-xl font-medium text-blueText dark:text-blue-500 hover:underline">2 star</a>
                <div class="w-2/4 h-5 mx-4 bg-inputBox rounded dark:bg-gray-700">
                    <div class="h-5 bg-orange rounded" style="width: 4%"></div>
                </div>
                <span class="text-xl font-medium text-blueText dark:text-gray-400">4%</span>
            </div>
            <div class="flex items-center mt-4">
                <a href="#" class="text-xl font-medium text-blueText dark:text-blue-500 hover:underline">1 star</a>
                <div class="w-2/4 h-5 mx-4 bg-inputBox rounded dark:bg-gray-700">
                    <div class="h-5 bg-orange rounded" style="width: 1%"></div>
                </div>
                <span class="text-xl font-medium text-blueText dark:text-gray-400">1%</span>
            </div>
            <!-- end of rating -->
            <!-- start of reviews -->

            <article class="mt-5">
                <div class="text-2xl font-bold text-blueText">Reviews</div>
                <div class="flex items-center mb-4 space-x-4">
                    <img class="w-10 h-10 rounded-full" src="../resources/img/chatphoto.png" alt="">
                    <div class="space-y-1 dark:text-white">
                        <p>Jese Leos <time datetime="2014-08-16 19:00" class="block text-sm text-gray-500 dark:text-gray-400">Joined on August 2014</time></p>
                    </div>
                </div>
                <div class="flex items-center mb-1">
                    <svg class="w-4 h-4 text-orange mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>
                    <svg class="w-4 h-4 text-orange mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>
                    <svg class="w-4 h-4 text-orange mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>
                    <svg class="w-4 h-4 text-orange mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>
                    <svg class="w-4 h-4 text-inputBox dark:text-gray-500 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>
                    <h3 class="ml-2 text-sm font-semibold text-gray-900 dark:text-white">Thinking to buy another one!</h3>
                </div>
                <footer class="mb-5 text-sm text-gray-500 dark:text-gray-400">
                    <p>Reviewed in the United Kingdom on <time datetime="2017-03-03 19:00">March 3, 2017</time></p>
                </footer>
                <p class="mb-2 text-greyText1 font-bold dark:text-gray-400">This is my third Invicta Pro Diver. They are just fantastic value for money. This one arrived yesterday and the first thing I did was set the time, popped on an identical strap from another Invicta and went in the shower with it to test the waterproofing.... No problems.</p>
                <p class="mb-3 text-greyText1 font-bold dark:text-gray-400">It is obviously not the same build quality as those very expensive watches. But that is like comparing a Citroën to a Ferrari. This watch was well under £100! An absolute bargain.</p>
                
                
            </article>


            <!-- end of reviews -->
            
            <div class="flex flex-row space-x-20 ml-[1100px]">
                            <div class="mt-6">
                                <button type="button" class="text-button rounded-lg px-[30px] py-1.5 bg-inputBox border border-button  text-xl font-RobotoSlab shadow-sm hover:bg-orange focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange">Cancel</button>
                            </div>
                            <div class="mt-6">
                                <button type="button" class="text-whiteText rounded-lg px-[30px] py-1.5 bg-button border border-button  text-xl font-RobotoSlab shadow-sm hover:bg-orange focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange">Edit</button>
                            </div>
            </div>

            
            
        </div>
        <!-- end of product details -->











    </div>








    <!-- end of right side -->


    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
    <!-- <script src="../resources/js/main.js"></script> -->


</body>

</html>