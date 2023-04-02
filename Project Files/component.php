<?php
function component($productname,$productprice,$productimg,$productid,$productdesc){
    $element="
    <div class=\"col-md-3 col-sm-6 my-3 my-md-4\">
             <form action=\"index.php\" method=\"post\">
                <div class=\"card shadow\">
                  <div>
                    <img src=\"$productimg\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                  </div>
                  <div class=\"card body\">
                     <h5 class=\"card-title\">$productname</h5>
                     <h6>
                         <i class=\"fas fa-star\"></i>
                         <i class=\"fas fa-star\"></i>
                         <i class=\"fas fa-star\"></i>
                         <i class=\"fas fa-star\"></i>
                         <i class=\"far fa-star\"></i>
                     </h6>
                     <p class=\"card-text\">
                        $productdesc
                     </p>
                     <h5>
                       <small><s class=\"text-secondary\">$1299</s></small>
                       <span class=\"price\">$$productprice</span>
                     </h5>
                     <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                     <input type='hidden' name='product_id' value='$productid'>
    
                  </div>
                </div>
             </form>
    </div>
";

echo$element;
}
function cartElement($productimg, $productname, $productprice, $productid){
  $element = "
  
  <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                      <div class=\"row bg-white\">
                          <div class=\"col-md-3 pl-0\">
                              <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                          </div>
                          <div class=\"col-md-8\">
                              <h5 class=\"pt-2\">$productname</h5>
                              <small class=\"text-secondary\">Seller: shopify</small>
                              <h5 class=\"pt-2\">$$productprice</h5>
                                <button type=\"submit\" class=\"btn btn-warning mx-2 my-2\" onclick=\"later()\">Save for Later</button>
                                <button type=\"submit\" class=\"btn btn-danger my-0\" onclick=\"call()\">Add to Wishlist <i class=\"fas fa-heart\"></i></button>
                                <button type=\"submit\" class=\"btn btn-dark mx-2\" name=\"remove\">Remove</button>
                               
                          </div>
                                               
                        
                    
          
                          <script>
                          function call() {
                          alert('Product has been Added To Wishlist...!')
                          }
                          function later(){
                          alert('Product has been Saved...!')
                          }

                         
                </script>
                </div>
                </div>
              </form>
              
                                       
  ";
  echo  $element;
}