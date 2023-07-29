<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
    <link href="../resources/lib/tailwind/output.css?id=<?=time()?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Reset Password</title>
</head>
<body>
<?php include "../common/CommonNavigation.php" ?>
    <main class=" lg:flex w-full h-full justify-between px-20 " >
        <div class="lg:w-1/3 lg:ml-24 sm:w-4/5  mt-16 sm:mx-auto">
            <p class="  text-2xl ml-24 my-10">Reset password</p>

            <div class="w-3/4 mx-auto">
                <p class=" mb-2">Please Enter your new password below</p>
                <p class="mb-4 text-[#ff9f29] text-xs">Minimum 6 characters with numbers and letters</p>
                
            <input type="password" name="new password" placeholder="new password" class="px-4 w-64 mx-auto ring-1 rounded-md">
           
            </div>
            <div class="w-3/4 mx-auto my-4">
            <input type="password" name="retype password" placeholder="retype password" class="px-4 w-64 mx-auto ring-1 rounded-md">
           
            </div>
             
            <div class="w-3/4 mx-auto">
                <input type="button" value="Send" class="bg-[#ff9f29] rounded-md mx-4 my-4 px-20 py-1 text-white">
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