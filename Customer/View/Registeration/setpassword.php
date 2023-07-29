<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
    <link href="../resources/lib/tailwind/output.css?id=<?=time()?>" rel="stylesheet">
    <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Set Passoword</title>
</head>
<body>
<?php include "../common/CommonNavigation.php" ?>

    <main class=" lg:flex w-full h-full justify-between px-20 " >
        <div class="lg:w-1/3 lg:ml-24 sm:w-4/5  mt-16 sm:mx-auto">
            <p class="  text-2xl ml-24">Set Password</p>

            <div class="my-10 w-3/4 mx-auto" >
                <p class="my-2 text-xs w-72">Please note that your email will be your full name by default if you don't set your full name now</p>
                <p class="my-2">Name</p>
            <input type="text" name="email" placeholder="Enter your name" class="w-64 px-4 ring-1 rounded-md">
           
            </div>
            <div class="w-3/4 mx-auto">
                <p class="my-2">Password</p>
            <input type="password" name="password" placeholder="Enter your password" class="px-4 my-2 w-64 mx-auto ring-1 rounded-md">
            <input type="password" name="password" placeholder="Retype password" class="px-4 w-64 mx-auto ring-1 rounded-md">
           
            </div>
            
            <div class="w-3/4 mx-auto mt-8 mb-4">
                <input type="button" value="Set" class="bg-[#ff9f29] rounded-md mx-4 my-4 px-20 py-1 text-white">
                <p class="w-60 text-center text-sm text-stone-800">skip</p>
            </div>  
           
        </div>
        
              
        </div>


        <div class="w-3/5 lg:visible sm:invisible ">
            <card class="">
               <img src="../photo/shopping illustation.jpg" alt="shopping"> 
            </card>

        </div>

    </main>
</body>
</html>