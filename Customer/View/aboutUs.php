<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./resources/lib/tailwind/output.css?id=<?=time()?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./resources/lib/jquery/jquery.js"></script>
    <script src="./resources/js/menu.js"></script>
    <title>Document</title>
</head>
<body>


     <!--navgation and header session start-->

     <nav class=" invisible lg:w-full lg:h-6 bg-[#FF9F29] flex justify-evenly text-white text-xs  lg:visible ">
        <div class="flex justify-between py-1">
            <phone class="flex mr-4">
                <ion-icon name="call-outline" class="mx-2 py-[2px]"></ion-icon>
                <p>09758895513</p>
            </phone>
            <message class="flex">
                <ion-icon name="mail-open-outline" class="mx-2 py-[2px]"></ion-icon>
                <p>godeal33@gmail.com</p>
        </div>
        </message>


        <div class="flex py-1">
            <login class="mx-4">Login</login>
            <login>Sign Up</login>
        </div>
    </nav>
    <!--navigation bar end-->
    <!--menu bar start-->
    <div class="lg:inline hidden">
    <menu class="w-full flex justify-evenly py-2 border lg:visible invisible">
        <div class="w-[100px] h-[30px]">
            <img src="../resources/img/photo/Logo.png" alt="logo" class="pt-0">
        </div>

        <a href="./homepage.php">Home</a>
        <p>Brand</p>
        <a href="./aboutUs.php">About Us</a>
        <p href="./aboutUs.php">Contact Us</p>
        <p>Help</p>
        <searchBar class="relative">
            <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-48 border border-slate-300 rounded-md py-[2px] pl-8 pr-3 focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Search for anything..." type="text" name="search" />

            <ion-icon name="search" class="w-[17px] h-[17px] fill-[#FF9F29] absolute top-1 left-2"></ion-icon>
        </searchBar>
        <ion-icon name="notifications" class="w-[23px] h-[23px] fill-[#ff9f29]"></ion-icon>
        <ion-icon name="cart" class="w-[23px] h-[23px] fill-[#ff9f29]"></ion-icon>

    </menu>
    </div>
    <!--menu bar end-->
    <!--mobile menu bar start-->
    <div class="w-full flex justify-evenly py-2 lg:invisible sm:visible absolute top-0">
        <div class="w-[70px] h-[20px]">
            <img src="../resources/img/photo/logo.png" alt="logo" class="pt-0">
        </div>
        <searchBar class="relative">
            <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-48 border border-slate-300 rounded-md py-[2px] pl-8 pr-3 focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Search for anything..." type="text" name="search" />

            <ion-icon name="search" class="w-[17px] h-[17px] fill-[#FF9F29] absolute top-1 left-2"></ion-icon>
        </searchBar>
        <ion-icon name="notifications" class="w-[20px] h-[20px] fill-[#ff9f29]"></ion-icon>
        <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#ff9f29]"></ion-icon>
        <ion-icon name="menu-outline" class="w-[20px] h-[20px] text-[#ff9f29]" id="menu"></ion-icon>
    </div>
    <div class="w-28 h-36 bg-black opacity-70 float-right  text-white text-center flex flex-col justify-evenly absolute top-10 right-2 lg:invisible sm:visible" id="dropdown_menu">
        <p>About Us</p>
        <p>Brand</p>
        <p>User Profile</p>

    </div>
    <!--mobile menu bar end-->

      <!--navgation and header session end-->



    <div class="overflow-x-hidden ">
      <p class="text-xl text-[#FF9F29] mt-10 text-center mx-20">About Us</p>  
      <p class="mt-5 text-gray-700 mx-20 text-center"> 
      Welcome to Godeal, your reliable and convenient Online Shopping Mall in Myanmar. Get ready as
       Godeal empowers you to let loose your shopaholic beast and go on a crazy online shopping spree like never before.
        Shop online with safest way as you can pay Cash on Delivery, allowing you make stress free payments. Whatever it is you 
        want to buy, Shop offers you all products at best prices which you can trust. We bring premium brands selling their finest
         products to your fingertips. From trendy Jeans to formal wears and stunning party wears, we cater to the needs of everyone: 
            Kids, Men or Women. Don't miss the chance to catch best deals and offers from Shop that we bring in every week. 
      At Godeal, we guarantee you to have the best online shopping experience like never before. With over 16000 items to choose from,
       Godeal offers wide range of items that span across everyone needs and wants.
      </p>
      <div class="flex lg:flex-row lg:mx-2 mx-20 flex-col overflow-x-hidden justify-evenly mt-10">

      <div class="">
        <p class="text-lg text-[#FF9F29] text-center mb-5 font-semibold">FAQ</p>
        <p class="text-[#FF9F29]">How Long will the delivery take?</p>
        <p class="w-80 pt-2 text-sm opacity-50">Rhe delivery will take 2 or 3 days depending on your location after your order</p>
        <hr>
        <br>
        <p>What will I do if I got demage product</p>
        <p></p>
        <hr>
        <br>
        <p>What are the refund policies</p>
        <p></p>
        <br>
        <p>What exactly happen after ordering </p>
        <p></p>
        <br>
        
      </div>
      <div>
        <p class="text-center text-lg text-[#ff9f29] mb-5">Still need help</p>
      
          <div class="flex mb-5" >
            <div  class="w-8 h-8 rounded-full bg-orange-500  mr-3">
            <ion-icon name="chatbubble-ellipses" class="p-2 text-white"></ion-icon>
            </div>
          
          <div>
            <p>Chat with us</p>
            <p class="text-xs">Live at 9:00 am to 4:00 pm (Mon-Sat)</p>
          </div>
          </div>
          <div class="flex mb-5 ">
            <div class="w-8 h-8 rounded-full bg-orange-500  mr-3">
            <ion-icon name="call"  class="p-2 text-white"></ion-icon>
            </div>
          
          <div>
            <p>Call Us</p>
            <p class="text-xs">09-956507003(Mon-Sat)</p>
          </div>
          </div>
          <div class="flex mb-5 ">
            <div class="w-8 h-8 rounded-full bg-orange-500  mr-3">
            <ion-icon name="mail-open"  class="p-2 text-white"></ion-icon>
            </div>
            <div>
            <p>Write to Us</p>
            <p class="text-xs">Godeal@gmail.com</p>
          </div>
          </div>

      </div>
    </div>
    </div>
    
</body>
</html>