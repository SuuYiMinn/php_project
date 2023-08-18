    $(document).ready(function () {

     $("#brand_product_search").keyup(function () {
      brandProduct_search($(this).val());
     });

     $("#brand_product_search_mobile").keyup(function () {
      brandProduct_search($(this).val());
     });


      function  brandProduct_search(searchKey) {

        
        $.ajax({
          url: "../Controller/brandP_searchController.php",
          type: "POST",
          data: {
            SearchBrand_product: searchKey,
          },
          success: function (res) {             
           
         let search_brand_products = JSON.parse(res);
            
              console.log(search_brand_products);
            $("#b_profile_body").empty();
    
            for (const brand_product of search_brand_products) {
              var discount = "";
              var normal_price = "";

              var rating = "";

              var product_rating = brand_product["product_rating"];
    
              for (let index = 0; index < product_rating; index++) {
                rating += `<ion-icon name="star" class="lg:w-3 w-2 lg:h-3 h-2 mr-[2px]"></ion-icon>`;
              }
    
              if (brand_product["p_discount"] != null) {
                discount = `<p class="text-orange-500 lg:text-xs text-[9px] mt-2 ml-2">${brand_product["p_discount"]}%off</p>`;
                normal_price = `<p class="lg:text-xs text-center line-through text-[9px]">${brand_product["p_sell_price"]}</p>`;
    
                var price =
                  brand_product["p_sell_price"] -
                  (brand_product["p_discount"] / 100) *
                    brand_product["p_sell_price"];
              } else price = brand_product["p_sell_price"];
    
              $("#b_profile_body").append(
                ` <a href="./detailpage.php?productid=${brand_product["id"]}" class="lg:w-60 w-40 lg:h-60 h-40 bg-white drop-shadow-md mt-2" id ="${brand_product["id"]}">
                          <!-- product image -->
                          <div class="w-full lg:h-2/3 h-3/5 relative">
                          </div>
                          <!-- product information -->
                          <div class="flex justify-evenly lg:h-1/3 h-2/5 bg-yellow-50">
                              <div>
                                  <p class="text-center lg:text-[13px] font-semibold text-[11px]">${brand_product["p_title"]}</p>
                                  <p class=" lg:block text-xs text-center hidden ">${brand_product["p_des"]}</p>
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
          error: function () {},
        })
        
      }



     



    });