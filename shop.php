<!DOCTYPE html>
<html>
<head>
    <title>HSPS - Shop</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/shop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="item-already-in-cart">
    <i class="fa fa-close close-msg" style="font-size:38px;color:red"></i>
        Sorry! You have already added this item to your cart!
    </div>
    <nav class="main-nav">
    <div class="logo-container">
        <a class="logo-link" href="./index.php" style="text-decoration: none;">
            <img src="https://www.proedakademie.com/rw_common/images/Pro-Ed%20Logo-72%20DPI.png" alt="logo" id="logo">
        </a>
    </div>
    <h1 class="welcome-msg">Welcome To Our Shop</h1>
    <ul class="menu">
        <li><a class="home" href="./index.php">Home</a></li>
        <li class="cart-div"><span id="count">0</span><i style="font-size:38px" class="fa fa-shopping-cart trolley"></i></li>
    </ul>
</nav>
<div class="cart-container">
    <i class="fa fa-remove close-cart"></i>
    <div class="cart-header">
        <h2>Your Cart</h2>
    </div>
    <div class="cart-wrapper">
        
    </div>
    <div class="total">
        <span class="total-price">$123</span>
    </div>
    <button class="place-order">Place Order</button>
</div>
 <div class="item-content">
    <div class="item">
        <p class="item-name">Granny Smith Apples Pack 1.5kg</p>
        <div class="item-img">
            <img id="product-img" src="https://bit.ly/3tLyXNy" alt="apples">
        </div>
        <div class="add-to-cart-container">
            <span class="price">N$24.99</span>
           <button class="add">Add to cart</button>
        </div>
    </div>
    <div class="item">
        <p class="item-name">Satsuma Oranges Bulk Pack</p>
        <div class="item-img">
            <img id="product-img" src="https://bit.ly/39CdkZi" alt="oranges">
        </div>
        <div class="add-to-cart-container">
            <span class="price">N$29.99</span>
           <button class="add">Add to cart</button>
        </div>
    </div>
    <div class="item">
        <p class="item-name">White Seedless grapes</p>
        <div class="item-img">
            <img id="product-img" src="https://bit.ly/39zn1HR" alt="grapes">
        </div>
        <div class="add-to-cart-container">
            <span class="price">N$44.99</span>
           <button class="add">Add to cart</button>
        </div>
    </div>
    <div class="item">
        <p class="item-name">Strawberries  pack 400g</p>
        <div class="item-img">
            <img id="product-img" src="https://bit.ly/3tMiA3f" alt="strawberries">
        </div>
        <div class="add-to-cart-container">
            <span class="price">N$19.99</span>
           <button class="add">Add to cart</button>
        </div>
    </div>
    <div class="item">
        <p class="item-name">Fresh organic Bananas 1.5kg </p>
        <div class="item-img">
            <img id="product-img" src="https://bit.ly/3OrE90Y" alt="Bananas">
        </div>
        <div class="add-to-cart-container">
            <span class="price">N$29.99</span>
           <button class="add">Add to cart</button>
        </div>
    </div>
    <div class="item">
        <p class="item-name">Tomatoes pack 1kg</p>
        <div class="item-img">
            <img id="product-img" src="https://bit.ly/3xGPkfp" alt="Tomatoes">
        </div>
        <div class="add-to-cart-container">
            <span class="price">N$45.00</span>
           <button class="add">Add to cart</button>
        </div>
    </div>
    <div class="item">
        <p class="item-name">Mixed Pepper pack 500g</p>
        <div class="item-img">
            <img id="product-img" src="https://bit.ly/3O6gcg2" alt="Pepper">
        </div>
        <div class="add-to-cart-container">
            <span class="price">N$18.99</span>
           <button class="add">Add to cart</button>
        </div>
    </div>
    <div class="item">
        <p class="item-name">Pickled Onions pack 1kg</p>
        <div class="item-img">
            <img id="product-img" src="https://bit.ly/3b0K6Uc" alt="onions">
        </div>
        <div class="add-to-cart-container">
            <span class="price">N$29.89</span>
           <button class="add">Add to cart</button>
        </div>
    </div>
    <div class="item">
        <p class="item-name">Green Gaby Cabbages 2 pack</p>
        <div class="item-img">
            <img id="product-img" src="https://bit.ly/3OcCrBa" alt="Cabbage">
        </div>
        <div class="add-to-cart-container">
            <span class="price">N$19.99</span>
           <button class="add">Add to cart</button>
        </div>
    </div>
 </div>  
 <?php include 'footer.php';?>
 <script src="./assets/js/shop.js"></script>
</body>
</html>