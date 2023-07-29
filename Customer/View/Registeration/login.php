<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/lib/tailwind/output.css?id=<?=time()?>" rel="stylesheet">
    <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Sign in</title>
</head>
<body>
    <!-- navigation bar-->
    <?php include "../common/CommonNavigation.php" ?>
    
    

    <main class=" lg:flex w-full h-full justify-between px-20 " >
        <div class="lg:w-1/3 lg:ml-24 sm:w-4/5  mt-16 sm:mx-auto">
            <p class="  text-2xl ml-24">Login</p>

            <div class="my-10 w-3/4 mx-auto" >
                <p class=" my-2">Please enter your email</p>
            <input type="text" name="email" placeholder="Enter your email" class="w-64 px-4 ring-1 rounded-md">
           
            </div>
            <div class="w-3/4 mx-auto">
                <p class="my-2">Password</p>
            <input type="password" name="password" placeholder="Enter your password" class="px-4 w-64 mx-auto ring-1 rounded-md">
           
            </div>
             <div class="flex mt-4 w-80  justify-between text-xs">
                <p class="sm:ml-12 lg:ml-4">forgot password?</p>
                
            </div>
            <div class="w-3/4 mx-auto mt-8 mb-4">
                <input type="button" value="Login" class="bg-[#ff9f29] rounded-md mx-4 my-4 px-20 py-1 text-white">
            </div>  
            <div class="flex w-80  justify-between text-xs">
                <p class="sm:ml-12 lg:ml-4">Don't have an account?</p>
                <p class="text-blue-900">sign up here</p>
                
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