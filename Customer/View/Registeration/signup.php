<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/lib/tailwind/output.css?id=<?=time()?>" rel="stylesheet">
    <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Sign Up</title>
</head>
<body>


<?php include "../common/CommonNavigation.php" ?>
<form action="../../Controller/signupController.php" method="post">
    <main class=" lg:flex w-full h-full justify-between px-20 " >
        <div class="lg:w-1/3 lg:ml-24 sm:w-4/5  mt-16 sm:mx-auto">
            <p class="  text-2xl ml-24">Sign Up</p>

            
            <div class="my-10 w-3/4 mx-auto" >
                <p class="mb-4">Please sign up using email</p>
                <p class=" mb-1 text-xs text-blue-900">We will send a code to your email</p>
            <input type="text" required name="email" placeholder="Enter your email" class="w-64 px-4 ring-1 rounded-md  require">
            <div class="w-64">
                <input type="submit"  value="send code" class="font-bold text-sm text-[#ff9f29] float-right p-2"></input>
            </div>
            
           
            </div>
            <div class="w-3/4 mx-auto">
                <p class="my-2">Code</p>
            <input type="password" name="code" placeholder="Enter your code" class="px-4 w-64 mx-auto ring-1 rounded-md">
           
            </div>
             <div class="flex mt-4 mb-8 w-80  justify-between text-xs">
                <p class="sm:ml-12 lg:ml-4">don't recieve the code?</p>
                <p class="font-bold text-sm text-[#ff9f29] float-right">resend code</p>
                
            </div>
            <div class="w-3/4 mx-auto">
                <input type="submit" value="Sign Up" class="bg-[#ff9f29] rounded-md mx-4 my-4 px-20 py-1 text-white">
            </div>    
              
        </div>


        <div class="w-3/5 lg:visible sm:invisible ">
            <card class="">
               <img src="../photo/shopping illustation.jpg" alt="shopping"> 
            </card>

        </div>

    </main>
    </form>
</body>
</html>