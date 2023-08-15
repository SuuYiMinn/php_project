$(document).ready(function () {
  var category = $(".cate_item");
  

  for (const sub_category of category) {
    $(sub_category).click(function () {
      
        for (let index = 0; index < category.length; index++) {
            
            $(category[index]).removeClass("bg-black");
            $(category[index]).removeClass("bg-opacity-80");
            $(category[index]).removeClass("text-white");    
            
        }
        $(this).removeClass("bg-gray-100");
        $(this).addClass("bg-black");
        $(this).addClass("bg-opacity-80");
        $(this).addClass("text-white");
       

      $.ajax({
        url: "../Controller/filterSub_cateController.php",
        type: "POST",
        data: {
          subcate_id: $(this).attr("id"),
        },
        success: function (res) {

          console.log(res);
          $(".filter_sub_category").empty();

          let filter_sub_category = JSON.parse(res);

        

          for (const subCate_product of filter_sub_category) {
            var rating = "";
            
              var product_rating = subCate_product["product_rating"];

              for (let index = 0; index < product_rating; index++) {
                rating +=`<ion-icon name="star" class="lg:w-3 w-2 lg:h-3 h-2 mr-[2px]"></ion-icon>`               
              }
              console.log(rating);
                    
            var discount = "";
            var normal_price = "";

            if (subCate_product["p_discount"] != null) {
              discount = `<p class="text-orange-500 lg:text-xs text-[9px] mt-2 ml-2">${subCate_product["p_discount"]}%off</p>`;
              normal_price = `<p class="lg:text-xs text-center line-through text-[9px]">${subCate_product["p_sell_price"]}</p>`;

              var price =
                subCate_product["p_sell_price"] -
                (subCate_product["p_discount"] / 100) *
                  subCate_product["p_sell_price"];
            } else price = subCate_product["p_sell_price"];

            $(".filter_sub_category").append(
              ` <a href="./detailpage.php?productid=${subCate_product["id"]}" class="lg:w-60 w-40 h-full bg-white drop-shadow-md mt-2" id ="${subCate_product["id"]}">
               <!-- product image -->
               <div class="w-full lg:h-2/3 h-3/5 relative">
               </div>
               <!-- product information -->
               <div class="flex justify-evenly lg:h-1/3 h-2/5 bg-yellow-50">
                   <div>
                       <p class="text-center lg:text-[13px] font-semibold text-[11px]">${subCate_product["p_title"]}</p>
                       <p class=" lg:block text-xs text-center hidden ">${subCate_product["p_des"]}</p>
                       ${discount}
                   
                   </div>
                   <div>
                       
                   <div class="flex mt-1 ml-3 text-orange-500">

                           ${rating}
   
                       </div>
                       <p class=" text-center lg:text-[13px] text-[11px] font-semibold text-orange-500 mt-1 w-16 ml-1">Ks <span>${price}</span></p>
                       ${normal_price}
                        
   
                   </div>
               </div>
           </a>`
            );
          }
        },
        error: function (error) {
          console.log(error);
        },
      });
    });
  }
 


    $("#cate_search").keyup(function () {
      
      $.ajax({
        url: "../Controller/homeSearchController.php",
        type: "POST",
        data: {
          SearchText: $(this).val(),
        },
        success: function (res) {
         
  
          let search_products = JSON.parse(res);

          console.log(search_products);
          $(".filter_sub_category").empty();
  
          for (const search_product of search_products) {
            var discount = "";
            var normal_price = "";
  
            if (search_product["p_discount"] != null) {
              discount = `<p class="text-orange-500 lg:text-xs text-[9px] mt-2 ml-2">${search_product["p_discount"]}%off</p>`;
              normal_price = `<p class="lg:text-xs text-center line-through text-[9px]">${search_product["p_sell_price"]}</p>`;
  
              var price =
                search_product["p_sell_price"] -
                (search_product["p_discount"] / 100) *
                  search_product["p_sell_price"];
            } else price = search_product["p_sell_price"];
  
            $(".filter_sub_category").append(
              ` <a href="./detailpage.php?productid=${search_product["id"]}" class="lg:w-60 w-40 lg:h-60 h-40 bg-white drop-shadow-md mt-2" id ="${search_product["id"]}">
                        <!-- product image -->
                        <div class="w-full lg:h-2/3 h-3/5 relative">
                        </div>
                        <!-- product information -->
                        <div class="flex justify-evenly lg:h-1/3 h-2/5 bg-yellow-50">
                            <div>
                                <p class="text-center lg:text-[13px] font-semibold text-[11px]">${search_product["p_title"]}</p>
                                <p class=" lg:block text-xs text-center hidden ">${search_product["p_des"]}</p>
                                ${discount}
                            
                            </div>
                            <div>
                                <div class="flex mt-1 ml-3 text-orange-500">
                                    <ion-icon name="star-outline" class="lg:w-3 lg:h-3 w-2 h-2 mr-[1px]"></ion-icon>
                                    <ion-icon name="star-outline" class="lg:w-3 lg:h-3 w-2 h-2 mr-[1px]"></ion-icon>
                                    <ion-icon name="star-outline" class="lg:w-3 lg:h-3 w-2 h-2 mr-[1px]"></ion-icon>
                                    <ion-icon name="star-outline" class="lg:w-3 lg:h-3 w-2 h-2 mr-[1px]"></ion-icon>
                                    <ion-icon name="star-outline" class="lg:w-3 lg:h-3 w-2 h-2 mr-[1px]"></ion-icon>
            
                                </div>
                                <p class=" text-center lg:text-[13px] text-[11px] font-semibold text-orange-500 mt-1 w-16 ml-1">Ks <span>${price}</span></p>
                                ${normal_price}
                                 
            
                            </div>
                        </div>
                    </a>`
            );
          }
        },
        error: function () {},
      });

    })


  

});


