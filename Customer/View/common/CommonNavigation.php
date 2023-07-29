<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../resources/lib/jquery/jquery.js"></script>
    <script src="../resources/js/menu.js"></script>

    <title>navigation</title>
</head>

<body>
    <nav class="lg:w-full lg:h-6 bg-[#FF9F29] flex justify-evenly text-white text-xs lg:visible sm:invisible">
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
    <menu class="w-full flex justify-evenly py-2 border lg:visible sm:invisible">
        <div class="w-[100px] h-[30px]">
            <img src="../resources/img/photo/Logo.png" alt="logo" class="pt-0">
        </div>

        <p>Home</p>
        <p>Shop</p>
        <p>About Us</p>
        <p>Contact Us</p>
        <p>Help</p>
        <searchBar class="relative">
            <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-48 border border-slate-300 rounded-md py-[2px] pl-8 pr-3 focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Search for anything..." type="text" name="search" />

            <ion-icon name="search" class="w-[17px] h-[17px] fill-[#FF9F29] absolute top-1 left-2"></ion-icon>
        </searchBar>
        <ion-icon name="notifications" class="w-[23px] h-[23px] fill-[#ff9f29]"></ion-icon>
        <ion-icon name="cart" class="w-[23px] h-[23px] fill-[#ff9f29]"></ion-icon>

    </menu>
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
</body>

</html>