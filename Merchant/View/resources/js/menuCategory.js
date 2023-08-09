$(document).ready(function () {
    $(".ddrop").mouseover(function () {
      // console.log($(this).find('p').text());
      // loadRegion($(this).find(':selected').Val())
      $.ajax({
        type: "POST",
        url: "../../Controller/selectCategoryController.php",
        data: {
          selectedCategoryId: $(this).find('p').text(),
        },
        success: function (res) {
          console.log(res);
          $("#subdropdown").empty();
          // $("#setown").empty();
          let receivesubcategory = JSON.parse(res);
          // console.log(receivesubcatgory);
          for (const subcategory of receivesubcategory) {
            console.log(subcategory);
             $("#subdropdown").append(
              `
                
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">${subcategory.sub_category_name}</a>
                </li>

              `
             )
          }
        },
  
  
  
  
  
  
        error: function (error) {
          console.log(error);
        },
      });
    });
    
  })