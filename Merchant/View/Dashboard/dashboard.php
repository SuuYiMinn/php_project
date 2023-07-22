<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- tailwind -->
    <link href="../resources/lib/tailwind/output.css" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="../resources/css/style.css">
    <!-- chartjs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- chart script file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.41.0/apexcharts.min.js" integrity="sha512-bp/xZXR0Wn5q5TgPtz7EbgZlRrIU3tsqoROPe9sLwdY6Z+0p6XRzr7/JzqQUfTSD3rWanL6WUVW7peD4zSY/vQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../resources/js/main.js" defer></script>
</head>

<body>
    <!-- start of header -->
    <div class="flex flex-row mb-5">
        <!-- start of logo -->
        <div>
            <img src="../resources/img/logo.png" class="h-50 w-110 absolute top-3 left-3">
        </div>
        <!-- end of logo -->
        <!-- start of title -->
        <div class="mt-5 ml-[350px]">
            <p class="font-ABeeZee italic font-bold text-3xl text-blueText">
                <span>Welcome Back,</span>
                <span>balarbalar</span>
            </p>
            <p class="mt-1 font-ABeeZee italic font-bold text-smallText textl-xl">Here's what happening with your shop</p>

        </div>
        <!-- end of title -->
    </div>
    <!-- end of header -->

    <!-- start of lower -->
    <div class="flex flex-row">
        <!-- start of left side -->
        <div class="bg-whiteText px-0 pt-0 pb-2 shadow-3xl rounded-lg">
            <!-- start of dashboard -->
            <div class="bg-orange rounded-lg">
                <svg class="fill-whiteText w-5 h-5  absolute mt-[23px] ml-[60px]" style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="info" />
                    <g id="icons">
                        <g id="dashboard">
                            <path d="M5,18H3c-1.1,0-2,0.9-2,2c0,1.1,0.9,2,2,2h2c1.1,0,2-0.9,2-2C7,18.9,6.1,18,5,18z" />
                            <path d="M13,16h-2c-1.1,0-2,0.9-2,2v2c0,1.1,0.9,2,2,2h2c1.1,0,2-0.9,2-2v-2C15,16.9,14.1,16,13,16z" />
                            <path d="Ms21,12h-2c-1.1,0-2,0.9-2,2v6c0,1.1,0.9,2,2,2h2c1.1,0,2-0.9,2-2v-6C23,12.9,22.1,12,21,12z" />
                            <path d="M22,2h-6.6c-0.9,0-1.3,1.1-0.7,1.7l1.9,1.9C12.9,9.8,7.6,13,2,13c-0.6,0-1,0.4-1,1c0,0.6,0.4,1,1,1    c6.7,0,12.9-1.9,17.4-6.6l1.8,1.8c0.6,0.6,1.7,0.2,1.7-0.7V3C23,2.4,22.6,2,22,2z" />
                        </g>
                    </g>
                </svg>
                <!-- <img src="../../../img/dashboard.svg" class="w-5 h-5 absolute mt-3 ml-3 fill-whiteText"> -->
                <div class="px-20 py-5 ml-3 font-RobotoSlab text-whiteText text-xl font-bold">Dashboard</div>

            </div>
            <!-- end of dashboard -->
            <!-- start of profile -->
            <div class="mt-4 bg-whiteText hover:bg-orange cursor-pointer group rounded-lg">
                <svg class="fill-orange group-hover:fill-whiteText w-5 h-5 absolute mt-[23px] ml-[60px]" data-name="Layer 1" id="Layer_1" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                    <title />
                    <path d="M81.49,21.21V32.35a6.48,6.48,0,0,1-6.11,6.56,6.19,6.19,0,0,1-4.57-1.76,6.26,6.26,0,0,1-1.91-4.53,6.3,6.3,0,0,1-12.6,0,6.3,6.3,0,1,1-12.6,0,6.3,6.3,0,0,1-12.6,0,6.27,6.27,0,0,1-6.48,6.29,6.48,6.48,0,0,1-6.11-6.56V21.21A3.21,3.21,0,0,1,21.72,18H78.28A3.21,3.21,0,0,1,81.49,21.21ZM72.81,82a2.82,2.82,0,0,0,2.82-2.82V42.9h-.51a10.14,10.14,0,0,1-6.23-2.15,10.29,10.29,0,0,1-12.59,0,10.31,10.31,0,0,1-12.6,0,10.29,10.29,0,0,1-12.59,0,10.27,10.27,0,0,1-6.27,2.14h-.47V79.18A2.82,2.82,0,0,0,27.19,82H33.5V61.82H48.83V82Z" />
                </svg>

                <div class="px-20 py-5 ml-3 font-RobotoSlab text-blueText group-hover:text-whiteText text-xl font-bold">Profile</div>

            </div>
            <!-- end of profile -->
            <!-- start of products -->
            <div class="mt-4 bg-whiteText hover:bg-orange cursor-pointer group rounded-lg">
                <svg class="fill-orange group-hover:fill-whiteText w-5 h-5 absolute mt-[23px] ml-[60px]" enable-background="new 0 0 48 48" height="48px" id="Layer_3" version="1.1" viewBox="0 0 48 48" width="48px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g>
                        <g>
                            <path d="M0.062,0.062v21.943h21.943v-8.978V0.062H0.062z M0.062,47.938h21.943V25.995H0.062V47.938z M25.995,25.995v21.942h21.942    V25.995H34.972H25.995z M34.972,0.063L22.005,13.028l12.966,12.967l12.966-12.966L34.972,0.063z" />
                        </g>
                    </g>
                </svg>

                <div class="px-20 py-5 ml-3 font-RobotoSlab text-blueText group-hover:text-whiteText text-xl font-bold">Products</div>

            </div>
            <!-- end of products -->
            <!-- start of orders -->
            <div class="mt-4 bg-whiteText hover:bg-orange cursor-pointer group rounded-lg">
                <svg class="fill-orange group-hover:fill-whiteText w-5 h-5 absolute mt-[23px] ml-[60px]" style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="info" />
                    <g id="icons">
                        <g id="cart2">
                            <circle cx="10" cy="20" r="2" />
                            <circle cx="16" cy="20" r="2" />
                            <path d="M21.6,7.8C21.2,7.3,20.6,7,20,7H8.6L8,3.6C7.8,2.7,7,2,6,2H4C2.9,2,2,2.9,2,4s0.9,2,2,2h0.3L6,14.4c0.2,1,1,1.6,2,1.6h10    c0.9,0,1.6-0.6,1.9-1.4l2-5C22.1,9,22,8.4,21.6,7.8z" />
                        </g>
                    </g>
                </svg>

                <div class="px-20 py-5 ml-3 font-RobotoSlab text-blueText group-hover:text-whiteText text-xl font-bold">Orders</div>

            </div>
            <!-- end of orders -->
            <!-- start of message -->
            <div class="mt-4 bg-whiteText hover:bg-orange hover:cursor-pointer group rounded-lg">
                <svg class="fill-orange group-hover:fill-whiteText w-5 h-5 absolute mt-[23px] ml-[60px]" height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg">
                    <path d="M40 4H8C5.79 4 4.02 5.79 4.02 8L4 44l8-8h28c2.21 0 4-1.79 4-4V8c0-2.21-1.79-4-4-4zm-4 24H12v-4h24v4zm0-6H12v-4h24v4zm0-6H12v-4h24v4z" />
                    <path d="M0 0h48v48H0z" fill="none" />
                </svg>

                <div class="px-20 py-5 ml-3 font-RobotoSlab text-blueText group-hover:text-whiteText text-xl font-bold">Message</div>

            </div>
            <!-- end of message -->
            <!-- start of setting -->
            <div class="mt-4   bg-whiteText hover:bg-orange hover:cursor-pointer  group rounded-lg ">
                <svg class="fill-orange group-hover:fill-whiteText w-5 h-5 absolute mt-[23px] ml-[60px]" style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="info" />
                    <g id="icons">
                        <path d="M22.2,14.4L21,13.7c-1.3-0.8-1.3-2.7,0-3.5l1.2-0.7c1-0.6,1.3-1.8,0.7-2.7l-1-1.7c-0.6-1-1.8-1.3-2.7-0.7   L18,5.1c-1.3,0.8-3-0.2-3-1.7V2c0-1.1-0.9-2-2-2h-2C9.9,0,9,0.9,9,2v1.3c0,1.5-1.7,2.5-3,1.7L4.8,4.4c-1-0.6-2.2-0.2-2.7,0.7   l-1,1.7C0.6,7.8,0.9,9,1.8,9.6L3,10.3C4.3,11,4.3,13,3,13.7l-1.2,0.7c-1,0.6-1.3,1.8-0.7,2.7l1,1.7c0.6,1,1.8,1.3,2.7,0.7L6,18.9   c1.3-0.8,3,0.2,3,1.7V22c0,1.1,0.9,2,2,2h2c1.1,0,2-0.9,2-2v-1.3c0-1.5,1.7-2.5,3-1.7l1.2,0.7c1,0.6,2.2,0.2,2.7-0.7l1-1.7   C23.4,16.2,23.1,15,22.2,14.4z M12,16c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,14.2,14.2,16,12,16z" id="settings" />
                    </g>
                </svg>

                <div class="px-20 py-5 ml-3 font-RobotoSlab text-blueText group-hover:text-whiteText text-xl font-bold">Setting</div>

            </div>
            <!-- end of setting -->
            <!-- start of logout -->
            <div class="mt-4 bg-whiteText hover:bg-orange group hover:cursor-pointer rounded-lg">
                <svg class="fill-orange group-hover:fill-whiteText w-5 h-5 absolute mt-[23px] ml-[60px]" viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg">
                    <title />
                    <g>
                        <path d="M20.4844,54H66a6,6,0,0,0,0-12H20.4844l7.7578-7.7578a5.9994,5.9994,0,0,0-8.4844-8.4844l-18,18a5.9979,5.9979,0,0,0,0,8.4844l18,18a5.9994,5.9994,0,1,0,8.4844-8.4844Z" />
                        <path d="M90,0H42a5.9966,5.9966,0,0,0-6,6V18a6,6,0,0,0,12,0V12H84V84H48V78a6,6,0,0,0-12,0V90a5.9966,5.9966,0,0,0,6,6H90a5.9966,5.9966,0,0,0,6-6V6A5.9966,5.9966,0,0,0,90,0Z" />
                    </g>
                </svg>

                <div class="px-20 py-5 ml-3 font-RobotoSlab text-blueText group-hover:text-whiteText text-xl font-bold">Log out</div>

            </div>
            <!-- end of logout -->

        </div>
        <!-- end of left side -->
        <!-- start of right side -->
        <div class="ml-20 flex flex-col ">
            <!-- start of boxes -->
            <div class="flex flex-row">
                <!-- start of total sales -->
                <div class="w-[250px] h-[150px] text-center bg-whiteText shadow-3xl rounded-2xl">
                    <p class=" mt-8 font-ABeeZee font-bold text-blueText text-2xl">Total Sales</p>
                    <p class="mt-3 font-Tommorrow italic font-bold text-lg text-greyText1">12900 Ks</p>
                </div>
                <!-- end of total sales -->
                <!-- start of registration fee -->

                <div class="w-[250px] h-[150px] ml-10 text-center bg-whiteText shadow-3xl rounded-2xl">
                    <p class="mt-8 font-ABeeZee font-bold text-blueText text-2xl">30 Days left</p>
                    <p class="mt-3 font-Tommorrow italic font-bold text-lg text-greyText1">For Registration Fee</p>

                </div>
                <!-- end of registration fee -->
                <!-- start of total orders -->
                <div class="w-[250px] h-[150px] ml-10 text-center bg-whiteText shadow-3xl rounded-2xl">
                    <p class=" mt-8 font-ABeeZee font-bold text-blueText text-2xl">Total Orders</p>
                    <p class="mt-3 font-Tommorrow italic font-bold text-lg text-greyText1">340</p>

                </div>
                <!-- end of total orders -->
                <!-- start of circle chart -->
                <div class="programming-stats">
                    <div class="chart-container">
                        <canvas class="my-chart"></canvas>
                    </div>

                    <div class="details">
                        <p class="text-blueText font-RobotoSlab font-bold text-lg">Sales By Category</p>
                        <ul></ul>
                    </div>
                </div>
                <!-- end of circle chart -->
                <!-- start of chart -->
                <div class="charts-card absolute mt-[200px]">
                    <h2 class="chart-title">Revenue Vs Orders</h2>
                    <div id="area-chart"></div>
                </div>

                <!-- end of chart -->
            </div>
            <!-- end of boxes -->
            
            <!-- start of bottom -->
            <div>

            </div>
            <!-- end of bottom -->

        </div>
        <!-- end of right side -->

    </div>

    <!-- end of lower -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="main.js"></script>


</body>

</html>