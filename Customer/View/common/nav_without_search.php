<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./resources/lib/jquery/jquery.js"></script>
    <script src="./resources/js/menu.js" defer></script>
    <title>Document</title>
</head>

<body>

<navigation class="sticky top-0 z-50">
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
         

        <?php 
        include "../Controller/accountController.php";

        if($accountresult != null){

        $customer_name = $accountresult[0]["c_name"];
   
        ?>

        <div> <login><?= $customer_name?></login> </div> <?php } else { ?>

        <div class="flex py-1"> 
            <a href="./Registeration/login.php" class="mx-4">Login</a>
            <a href="./Registeration/login.php">Sign Up</a>
        </div>

        <?php } ?>
    </nav>
    <!--navigation bar end-->
    <!--menu bar start-->
    <div class="lg:inline hidden">
    <menu class="w-full flex justify-evenly py-2 border lg:visible invisible bg-white">
        <a href="./home.php" class="w-[100px] h-[30px]">
            <img src="./resources/img/photo/Logo.png" alt="logo" class="pt-0">
        </a>

        <a href="./homepage.php">Home</a>
            <a href="./brandlist.php">Brand</a>
            <a href="./aboutUs.php">About Us</a>
            <a href = "./aboutUs.php">Contact Us</a>
            <a href ="./aboutUs.php">Help</a>
       <!-- <searchBar class="relative">
            <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-48 border border-slate-300 rounded-md py-[2px] pl-8 pr-3 focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Search for anything..." type="text" name="search" />

            <ion-icon name="search" class="w-[17px] h-[17px] fill-[#FF9F29] absolute top-1 left-2"></ion-icon>
        </searchBar> -->
        <ion-icon name="notifications" class="w-[23px] h-[23px] fill-[#ff9f29]"></ion-icon>
        <?php if ($accountresult != null) { ?>
            <a href="./cart.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#ff9f29]"></ion-icon></a>

        <?php } else { ?>
            <a href="./Registeration/signup.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#ff9f29]"></ion-icon></a>
        <?php } ?>

    </menu>
    </div>
    <!--menu bar end-->
    <!--mobile menu bar start-->
    <div class="w-full flex justify-evenly py-2 lg:invisible sm:visible absolute top-0 bg-white">
        <div class="w-[70px] h-[20px]">
            <img src="./resources/img/photo/logo.png" alt="logo" class="pt-0">
        </div>
        <!--    <searchBar class="relative">
            <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-48 border border-slate-300 rounded-md py-[2px] pl-8 pr-3 focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Search for anything..." type="text" name="search" />

            <ion-icon name="search" class="w-[17px] h-[17px] fill-[#FF9F29] absolute top-1 left-2"></ion-icon>
        </searchBar> -->
        <ion-icon name="notifications" class="w-[20px] h-[20px] fill-[#ff9f29]"></ion-icon>
        <?php if ($accountresult != null) { ?>
            <a href="./cart.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#ff9f29]"></ion-icon></a>

        <?php } else { ?>
            <a href="./Registeration/signup.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#ff9f29]"></ion-icon></a>
        <?php } ?>
        <ion-icon name="menu-outline" class="w-[20px] h-[20px] text-[#ff9f29]" id="withoutSearch_menu"></ion-icon>
    </div>
    <div class="w-28 h-36 bg-black opacity-70 float-right  text-white text-center flex flex-col justify-evenly absolute top-10 right-2 lg:invisible sm:visible" id="withoutSearch_dropdown">
        <a href = "./aboutUs.php">About Us</a>
        <a href= "./brandlist.php" >Brand</a>
        <?php  if($accountresult != null){ ?>
        <a href="./userProfile.php"><?=$customer_name?></a> <?php }else {?>

            <a href="./Registeration/signup.php">Sign Up </a>
            <a href= "./Registeration/login.php" >Login</a> <?php } ?>

    </div>
    <!--mobile menu bar end-->
    </navigation>

      <!--navgation and header session end-->
      </body>

</html>