<?php

function component($productname, $productprice, $productimg){
    $element = "
    
    <div class=\"shop-item col-4\">
    <span class=\"shop-item-title\">$productname</span>
    <img class=\"shop-item-image img\" src=$productimg>
    <div class=\"shop-item-details\">
        <span class=\"shop-item-price\">$$productprice</span>
        <button class=\"btn button shop-button\" style = \"background-color: black; border: none\" type=\"button\">ADD TO CART</button>
    </div>
</div>



    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    
        <div class=\"border rounded\">
        <div class=\"row bg-white\">
            <div class=\"col-md-3 pl-0\">
                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
            </div>
        <div class=\"col-md-6\">
            <h5 class=\"pt-2\">$productname</h5>
                <small class=\"text-secondary\">Seller: dailytuition</small>
            <h5 class=\"pt-2\">$$productprice</h5>
                <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
        </div>
        <div class=\"col-md-3 py-5\">
            <div>
                <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
            </div>
        </div>
        </div>
        /div>          
    </form>
    ";
    echo  $element;
}
