$(document).ready(function () {
    var cart = $(".all_cart");
    var all_products = $(".products_to_add");
    var notice = $(".all_notice");
    $(".all_notice").hide();
  
    var isLogin;
  
    for (let index = 0; index < cart.length; index++) {
      $(cart[index]).click(function (event) {
        event.preventDefault();
        isLogin = $(this).attr("islogin");
        let productIdString = $(all_products[index]).attr("id");
  
        var numericCharacters = productIdString.match(/[0-9]/g);
  
        if (numericCharacters) {
           productId = numericCharacters.join(""); // Convert the array to a single string
          
        }
  
        if (isLogin == 1) {
          $.ajax({
            url: "../Controller/addto_cartController.php",
            type: "POST",
            data: {
              ProductId: productId,
            },
            success: function (res) {
              console.log(res);
             
              var result = res;
              if (result == "done"){
                $(notice[index]).show();
                $(notice[index]).html("<p>product added to cart</p>");
  
              }else if(result == "already Exit"){
                $(notice[index]).show();
                $(notice[index]).html("<p>product alredy in cart</p>");
               
  
              }
  
              setTimeout(function(){ $(notice[index]).hide(); }, 1000);
              
            },
            error: function () {},
          });
        } else if (isLogin == 2) {
          window.location.href = "Registeration/signUp.php";
        }
      });
    }
  });