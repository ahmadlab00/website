

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
</head>
<body>

    <nav id="nav">
        <div class="navTop">
            <div class="navItem">
                <a href="mainout.php" style="color: white; text-decoration: none;"><h1>Suptopia.</h1></a>
            </div>
            <div class="sign-out-button">
    <a href="mainin.php" style="color: white; text-decoration: none;">
        <button class="custom-button">Sign Out</button>
    </a>
</div>

        </div>
        <div class="navBottom">
            <h3 class="menuItem">Whey Protein</h3>
            <h3 class="menuItem">Creatine</h3>
            <h3 class="menuItem">BCAA</h3>
            <h3 class="menuItem">L-Carnitine</h3>
            <h3 class="menuItem">Our Merch</h3>
        </div>
    </nav>
        
    <div class="slider">
        <div class="sliderWrapper">
            <div class="sliderItem">
                <img src="./img/muscletech.webp" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">Muscletech</br>whey protien</h1>
                
                <a href="#product">
                    <button class="buyButton">View Item</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/creatine.webp" alt="" class="sliderImg">
                <div class="sliderBg">

                </div>
                <h1 class="sliderTitle">Muscletech</br>Creatine</h1>
                
                <a href="#product">
                    <button class="buyButton">View Item</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/BCAA.webp" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">Biotech USA</br>BCAA</h1>
                
                <a href="#product">
                    <button class="buyButton">View Item</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/L-Carnatine.png" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">Biotech USA</br>L-Carnatine</h1>
               
                <a href="#product">
                    <button class="buyButton">View Item</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/merch.png" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">Our Merch</h1>
               
                <a href="#product">
                    <button class="buyButton">View Item</button>
                </a>
            </div>
        </div>
    </div>
   
    <div class="features">
        <div class="feature">
            <img src="./img/ship.jpg" alt="" class="featureIcon">
            <span class="featureTitle">FREE SHIPPING</span>
            <span class="featureDesc">Free worldwide shipping on all orders.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/box.jpg" alt="">
            <span class="featureTitle">30 DAYS RETURN</span>
            <span class="featureDesc">No question return and easy refund in 14 days.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/package.jpg" alt="">
            <span class="featureTitle">GIFT CARDS</span>
            <span class="featureDesc">Buy gift cards and use coupon codes easily.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/share.jpg" alt="">
            <span class="featureTitle">CONTACT US!</span>
            <span class="featureDesc">Keep in touch via email and support system.</span>
        </div>
    </div>

    <div class="product" id="product">
        <img src="./img/muscletech.webp" alt="" class="productImg">
        <div class="productDetails">
            <h1 class="productTitle">Nitro Tech<br> Whey Protien</h1>
            <h2 class="productPrice">70 JD</h2>
            <p class="productDesc">
                "Explore the pinnacle of global supplements through our unparalleled selection. Enjoy a two-week warranty for absolute peace of mind with your purchase."</p>
           
            
            <button class="productButton">BUY NOW!</button>
        </div>  
          <div class="payment">
            <h1 class="payTitle">Personal Information</h1>
            <label>Name and Surname</label>
            <input type="text" placeholder="John Doe" class="payInput">
            <label>Phone Number</label>
            <input type="text" placeholder="+1 234 5678" class="payInput">
            <label>Address</label>
            <input type="text" placeholder="Elton St 21 22-145" class="payInput">
            <h1 class="payTitle">Card Information</h1>
            <div class="cardIcons">
                <img src="./img/visa.png" width="40" alt="" class="cardIcon">
                <img src="./img/master.png" alt="" width="40" class="cardIcon">
            </div>
            <input type="password" class="payInput" placeholder="Card Number">
            <div class="cardInfo">
                <input type="text" placeholder="mm" class="payInput sm">
                <input type="text" placeholder="yyyy" class="payInput sm">
                <input type="text" placeholder="cvv" class="payInput sm">
            </div>
            <div class="payButtonWrapper">
            <button class="payButton">Pay</button>
        </div>

            <span class="close">X</span>
        </div>
    </div>
    <div class="gallery">
        <div class="galleryItem">
            <h1 class="galleryTitle">Be Yourself!</h1>
            <img src="./img/pexels-cottonbro-studio-4752861.jpg"
                alt="" class="galleryImg">
        </div>
        <div class="galleryItem">
            <img src="./img/pexels-pixabay-290416.jpg"
                alt="" class="galleryImg">
            <h1 class="galleryTitle">This is the First Day of Your New Life</h1>
        </div>
        <div class="galleryItem">
            <h1 class="galleryTitle">Just Do it!</h1>
            <img src="./img/pexels-mister-mister-3490348.jpg"
                alt="" class="galleryImg">
        </div>
    </div>
    <div class="newSeason">
        <div class="nsItem">
            <img src="./img/pexels-victor-freitas-791764.jpg"
                alt="" class="nsImg">
        </div>
        <div class="nsItem">
            <h3 class="nsTitleSm">The best of the best</h3>
            <h1 class="nsTitle">New supplements</h1>
            <h1 class="nsTitle">Get yours now</h1>
            <a href="#nav">
                <button class="nsButton">Press Here</button>
            </a>
        </div>
        <div class="nsItem">
            <img src="./img/pexels-victor-freitas-949128.jpg"
                alt="" class="nsImg">
        </div>
    </div>
    <footer>
        
            
            
        <div class="footerLeft">
            <div class="footerMenu">
                <h1 class="fMenuTitle">About Us</h1>
                <ul class="fList">
                    <li class="fListItem">Company</li>
                    <li class="fListItem">Contact</li>
                    <li class="fListItem">Careers</li>
                    <li class="fListItem">Affiliates</li>
                    <li class="fListItem">Stores</li>
                </ul>
            </div>
            <div class="footerMenu">
                <h1 class="fMenuTitle">Useful Links</h1>
                <ul class="fList">
                    <li class="fListItem">Support</li>
                    <li class="fListItem">Refund</li>
                    <li class="fListItem">FAQ</li>
                    <li class="fListItem">Feedback</li>
                    <li class="fListItem">Stories</li>
                </ul>
            </div>
            <div class="footerMenu">
                <h1 class="fMenuTitle">Products</h1>
                <ul class="fList">
                    <li class="fListItem">Whey Protien</li>
                    <li class="fListItem">Creatine</li>
                    <li class="fListItem">BCAA</li>
                    <li class="fListItem">L-Carnatine</li>
                    <li class="fListItem">Our Merch</li>
                </ul>
            </div>
        </div>
        <div class="footerRight">
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">Subscribe to our newsletter</h1>
                <div class="fMail">
                    <input type="text" placeholder="your@email.com" class="fInput">
                    <button id="joinButton" class="fButton">Join!</button>


                </div>
            </div>
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">Follow Us</h1>
                <div class="fIcons">
                <img src="./img/facebook.png" alt="" class="fIcon">
                    <a href="https://twitter.com/suptopia0"><img src="./img/twitter.png" alt="" class="fIcon"></a>
                    <a href="https://www.instagram.com/suptopia__/"><img src="./img/instagram.png" alt="https://www.instagram.com/suptopia__/" class="fIcon"></a>
                 
                </div>
            </div>
            <div class="footerRightMenu">
                <span class="copyright">Suptopia. All rights reserved. 2023.</span>
            </div>
        </div>
    </footer>
    </footer>
    <script src="main.js"></script>
</body>

</html>