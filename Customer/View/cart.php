<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./resources/css/categoryProduct.css">
  <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
  <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="./resources/lib/jquery/jquery.js"></script>
  <script src="./resources/js/menu.js"></script>
  <title>Cart</title>
</head>

<body>
  <?php include "./common/nav_without_search.php" ?>
  <p class="text-orange-500 font-medium text-2xl text-center my-5">My Cart</p>
  <section class=" w-full h-[100vh] flex lg:flex-row flex-col justify-around">
    <!-- products -->
    <div class="lg:w-2/5 w-full lg:h-56 h-80 overflow-y-auto">
      <!-- one product -->
      <div class="w-11/12 lg:h-24 h-20 shadow-md flex justify-start items-center py-1 px-1 mx-auto relative">
        <input class="lg:w-4 lg:h-4 w-2 h-2" type="checkbox" />
        <div class=" lg:w-20 w-14 ml-2">
          <img class="w-full" src="./resources/img/photo/product.jpg" alt="" />
        </div>

        <div class="lg:text-base absolute right-1 text-sm w-8/12">
          <div class="flex ">
            <div>
              <p class="w-40 mb-1">Olay Moisturizing cream </p>
              <p class="">Ks 25000</p>
            </div>

            <div class="absolute right-0 bottom-0">  
            <!-- delete -->
              <ion-icon name="trash-outline" class ="ml-6"></ion-icon>
              <!-- quantity -->
              <div class="flex">
              <p class="text-[#FF9F29]">Qty</p>
              <div class="flex w-10 items-center lg:ml-2 ml-1">
                <div class="w-3">
                  <img class="w-full" src="./resources/img/baseline-plus.svg" alt="" />
                </div>
                <div>1</div>
                <div class="w-3">
                  <img class="w-full" src="./resources/img/baseline-minus.svg" alt="" />
                </div>
              </div>
            </div>
            
            </div>
          </div>

        </div>
      </div>
      <div class="w-11/12 lg:h-24 h-20 shadow-md flex justify-start items-center py-1 px-1 mx-auto relative">
        <input class="lg:w-4 lg:h-4 w-2 h-2" type="checkbox" />
        <div class=" lg:w-20 w-14 ml-2">
          <img class="w-full" src="./resources/img/photo/product.jpg" alt="" />
        </div>

        <div class="lg:text-base absolute right-1 text-sm w-8/12">
          <div class="flex ">
            <div>
              <p class="w-40 mb-1">Olay Moisturizing cream </p>
              <p class="">Ks 25000</p>
            </div>

            <div class="absolute right-0 bottom-0">  
            <!-- delete -->
              <ion-icon name="trash-outline" class ="ml-6"></ion-icon>
              <!-- quantity -->
              <div class="flex">
              <p class="text-[#FF9F29]">Qty</p>
              <div class="flex w-10 items-center lg:ml-2 ml-1">
                <div class="w-3">
                  <img class="w-full" src="./resources/img/baseline-plus.svg" alt="" />
                </div>
                <div>1</div>
                <div class="w-3">
                  <img class="w-full" src="./resources/img/baseline-minus.svg" alt="" />
                </div>
              </div>
            </div>
            
            </div>
          </div>

        </div>
      </div>
      <div class="w-11/12 lg:h-24 h-20 shadow-md flex justify-start items-center py-1 px-1 mx-auto relative">
        <input class="lg:w-4 lg:h-4 w-2 h-2" type="checkbox" />
        <div class=" lg:w-20 w-14 ml-2">
          <img class="w-full" src="./resources/img/photo/product.jpg" alt="" />
        </div>

        <div class="lg:text-base absolute right-1 text-sm w-8/12">
          <div class="flex ">
            <div>
              <p class="w-40 mb-1">Olay Moisturizing cream </p>
              <p class="">Ks 25000</p>
            </div>

            <div class="absolute right-0 bottom-0">  
            <!-- delete -->
              <ion-icon name="trash-outline" class ="ml-6"></ion-icon>
              <!-- quantity -->
              <div class="flex">
              <p class="text-[#FF9F29]">Qty</p>
              <div class="flex w-10 items-center lg:ml-2 ml-1">
                <div class="w-3">
                  <img class="w-full" src="./resources/img/baseline-plus.svg" alt="" />
                </div>
                <div>1</div>
                <div class="w-3">
                  <img class="w-full" src="./resources/img/baseline-minus.svg" alt="" />
                </div>
              </div>
            </div>
            
            </div>
          </div>

        </div>
      </div>
      <div class="w-11/12 lg:h-24 h-20 shadow-md flex justify-start items-center py-1 px-1 mx-auto relative">
        <input class="lg:w-4 lg:h-4 w-2 h-2" type="checkbox" />
        <div class=" lg:w-20 w-14 ml-2">
          <img class="w-full" src="./resources/img/photo/product.jpg" alt="" />
        </div>

        <div class="lg:text-base absolute right-1 text-sm w-8/12">
          <div class="flex ">
            <div>
              <p class="w-40 mb-1">Olay Moisturizing cream </p>
              <p class="">Ks 25000</p>
            </div>

            <div class="absolute right-0 bottom-0">  
            <!-- delete -->
              <ion-icon name="trash-outline" class ="ml-6"></ion-icon>
              <!-- quantity -->
              <div class="flex">
              <p class="text-[#FF9F29]">Qty</p>
              <div class="flex w-10 items-center lg:ml-2 ml-1">
                <div class="w-3">
                  <img class="w-full" src="./resources/img/baseline-plus.svg" alt="" />
                </div>
                <div>1</div>
                <div class="w-3">
                  <img class="w-full" src="./resources/img/baseline-minus.svg" alt="" />
                </div>
              </div>
            </div>
            
            </div>
          </div>

        </div>
      </div>
      <div class="w-11/12 lg:h-24 h-20 shadow-md flex justify-start items-center py-1 px-1 mx-auto relative">
        <input class="lg:w-4 lg:h-4 w-2 h-2" type="checkbox" />
        <div class=" lg:w-20 w-14 ml-2">
          <img class="w-full" src="./resources/img/photo/product.jpg" alt="" />
        </div>

        <div class="lg:text-base absolute right-1 text-sm w-8/12">
          <div class="flex ">
            <div>
              <p class="w-40 mb-1">Olay Moisturizing cream </p>
              <p class="">Ks 25000</p>
            </div>

            <div class="absolute right-0 bottom-0">  
            <!-- delete -->
              <ion-icon name="trash-outline" class ="ml-6"></ion-icon>
              <!-- quantity -->
              <div class="flex">
              <p class="text-[#FF9F29]">Qty</p>
              <div class="flex w-10 items-center lg:ml-2 ml-1">
                <div class="w-3">
                  <img class="w-full" src="./resources/img/baseline-plus.svg" alt="" />
                </div>
                <div>1</div>
                <div class="w-3">
                  <img class="w-full" src="./resources/img/baseline-minus.svg" alt="" />
                </div>
              </div>
            </div>
            
            </div>
          </div>

        </div>
      </div>

      <div class="w-11/12 lg:h-24 h-20 shadow-md flex justify-start items-center py-1 px-1 mx-auto relative">
        <input class="lg:w-4 lg:h-4 w-2 h-2" type="checkbox" />
        <div class=" lg:w-20 w-14 ml-2">
          <img class="w-full" src="./resources/img/photo/product.jpg" alt="" />
        </div>

        <div class="lg:text-base absolute right-1 text-sm w-8/12">
          <div class="flex ">
            <div>
              <p class="w-40 mb-1">Olay Moisturizing cream </p>
              <p class="">Ks 25000</p>
            </div>

            <div class="absolute right-0 bottom-0">  
            <!-- delete -->
              <ion-icon name="trash-outline" class ="ml-6"></ion-icon>
              <!-- quantity -->
              <div class="flex">
              <p class="text-[#FF9F29]">Qty</p>
              <div class="flex w-10 items-center lg:ml-2 ml-1">
                <div class="w-3">
                  <img class="w-full" src="./resources/img/baseline-plus.svg" alt="" />
                </div>
                <div>1</div>
                <div class="w-3">
                  <img class="w-full" src="./resources/img/baseline-minus.svg" alt="" />
                </div>
              </div>
            </div>
            
            </div>
          </div>

        </div>
      </div>

      <div class="w-11/12 lg:h-24 h-20 shadow-md flex justify-start items-center py-1 px-1 mx-auto relative">
        <input class="lg:w-4 lg:h-4 w-2 h-2" type="checkbox" />
        <div class=" lg:w-20 w-14 ml-2">
          <img class="w-full" src="./resources/img/photo/product.jpg" alt="" />
        </div>

        <div class="lg:text-base absolute right-1 text-sm w-8/12">
          <div class="flex ">
            <div>
              <p class="w-40 mb-1">Olay Moisturizing cream </p>
              <p class="">Ks 25000</p>
            </div>

            <div class="absolute right-0 bottom-0">  
            <!-- delete -->
              <ion-icon name="trash-outline" class ="ml-6"></ion-icon>
              <!-- quantity -->
              <div class="flex">
              <p class="text-[#FF9F29]">Qty</p>
              <div class="flex w-10 items-center lg:ml-2 ml-1">
                <div class="w-3">
                  <img class="w-full" src="./resources/img/baseline-plus.svg" alt="" />
                </div>
                <div>1</div>
                <div class="w-3">
                  <img class="w-full" src="./resources/img/baseline-minus.svg" alt="" />
                </div>
              </div>
            </div>
            
            </div>
          </div>

        </div>
      </div>



    </div>


    <!-- order -->
    <div class="lg:w-2/5 w-11/12 lg:h-2/3 shadow-md border-2  lg:px-16 px-8  lg:py-12 py-6 lg:mt-5 mt-2 mx-auto">
      <p class="lg:text-xl text-lg font-medium mb-10">Order Summary</p>

      <div class="flex justify-between mb-5 lg:text-base text-sm">
        <p>Subtotal ( 2 items)</p>
        <p>Ks 19550</p>
      </div>

      <div class="flex justify-between mb-5 lg:text-base text-sm">
        <p>Shipping Fees</p>
        <p>Ks 2250</p>
      </div>

      <div class="flex justify-around mb-8 lg:text-base text-sm">
        <p class="text-lg">Total</p>
        <p class="text-lg text-orange-500">22500</p>
      </div>


      <div class="w-48 rounded-md bg-[#ff9f29] mx-auto">
        <p class="text-white text-center py-1">Proceed to Purchase</p>
      </div>

    </div>
  </section>
  <!-- body end -->

  <?php include "../View/common/commonFooter.php" ?>

</body>

</html>