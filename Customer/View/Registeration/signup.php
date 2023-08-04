<?php session_start() ?>


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
    <main class=" lg:flex lg:justify-evenly lg:w-full w-5/6 mx-auto overflow-x-hidden" >
        <div class="lg:w-1/3 w-5/6 mx-auto mt-6">
            <p class=" font-medium text-2xl mb-20 w-80">Register your account</p>

            
            <div class="">
                <p class="mb-4 text-orange-500 test-center w-60">Please sign up using email</p>
                <p class=" mb-1 text-xs text-blue-900 w-60">We will send verification link to your email</p>
            <input type="text" required name="email" placeholder="Enter your email" class="px-4 ring-1 rounded-md">
                <small class="float left text-red-700"><?php 
                if(isset($_SESSION["registerError"])){
                    $_SESSION["registerError"];

                }
                
                ?></small>
            <input type="password" required name="password" placeholder="Enter password" class="px-4 ring-1 rounded-md my-5">
            
           
            </div>
        
            <div class="w-60 mt-10">
                <input type="submit" value="Register" class="bg-[#ff9f29] rounded-md px-24 lg:px-20 py-1 text-white">
            </div>    
              
        </div>


        <div class="w-3/5 lg:visible invisible ">
            <card class="">
               <img src="../resources/img/photo/illustation.jpg" alt="shopping"> 
            </card>

        </div>

    </main>
    </form>
</body>
</html>
<?php $_SESSION["registerError"] = "" ?>