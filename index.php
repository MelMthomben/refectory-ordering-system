<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refectory Ordering System</title>
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php 
    include "header.php";
?>

    <!--- ------------  HERO---------------------->
    <section id="banner">
        <div class="hero">
            <div class="container hero-container">
                <h1>Easy ordering, easy collection, happy dining</h1>
                <h3>A simplified ordering process for students and staff on the go</h3>
                
                <form class="textbox-search">
                    <input class="search-box" type="search" placeholder="What do you want to eat today?" required>
                    <button id="search-button" type="submit"><span><i class="fas fa-search"></i></span></button>
                </form>
            </div>
        </div>
    </section>

    <!----TODAY'S MENU-->
    <section id="menu">
        <div class=container>
            <h1 class="menu-title">Today's Menu</h1>
            <div id="grid">
                <div id="rice and chicken"> <!--IDENTIFIER-->
                    <div class="firstClass">
                        <img src="assets/images/food-134.jpg" alt="food">
                        <p>Rice&Chicken</p>
                        <p>E25.00</p>
                        <div class="three-inline-buttons">
                            <button>-</button>
                            <button>2</button>
                            <button>+</button>
                        </div>
                        <buttonn class="add2cart-btn">Add to Cart</buttonn>
                    </div>
                </div>

                <div id="rice and chicken"> <!--IDENTIFIER-->
                    <div class="firstClass">
                        <img src="assets/images/food-134.jpg" alt="food">
                        <p>Rice&Chicken</p>
                        <p>E25.00</p>
                        <div class="three-inline-buttons">
                            <button>-</button>
                            <button>2</button>
                            <button>+</button>
                        </div>
                        <buttonn class="add2cart-btn">Add to Cart</buttonn>
                    </div>
                </div>

                <div id="rice and chicken"> <!--IDENTIFIER-->
                    <div class="firstClass">
                        <img src="assets/images/food-134.jpg" alt="food">
                        <p>Rice&Chicken</p>
                        <p>E25.00</p>
                        <div class="three-inline-buttons">
                            <button>-</button>
                            <button>2</button>
                            <button>+</button>
                        </div>
                        <buttonn class="add2cart-btn">Add to Cart</buttonn>
                    </div>
                </div>

                <div id="rice and chicken"> <!--IDENTIFIER-->
                    <div class="firstClass">
                        <img src="assets/images/food-134.jpg" alt="food">
                        <p>Rice&Chicken</p>
                        <p>E25.00</p>
                        <div class="three-inline-buttons">
                            <button>-</button>
                            <button>2</button>
                            <button>+</button>
                        </div>
                        <buttonn class="add2cart-btn">Add to Cart</buttonn>
                    </div>
                </div>

                <div id="rice and chicken"> <!--IDENTIFIER-->
                    <div class="firstClass">
                        <img src="assets/images/food-134.jpg" alt="food">
                        <p>Rice&Chicken</p>
                        <p>E25.00</p>
                        <div class="three-inline-buttons">
                            <button>-</button>
                            <button>2</button>
                            <button>+</button>
                        </div>
                        <buttonn class="add2cart-btn">Add to Cart</buttonn>
                    </div>
                </div>

                <div id="rice and chicken"> <!--IDENTIFIER-->
                    <div class="firstClass">
                        <img src="assets/images/food-134.jpg" alt="food">
                        <p>Rice&Chicken</p>
                        <p>E25.00</p>
                        <div class="three-inline-buttons">
                            <button>-</button>
                            <button>2</button>
                            <button>+</button>
                        </div>
                        <buttonn class="add2cart-btn">Add to Cart</buttonn>
                    </div>
                </div>

                <div id="rice and chicken"> <!--IDENTIFIER-->
                    <div class="firstClass">
                        <img src="assets/images/food-134.jpg" alt="food">
                        <p>Rice&Chicken</p>
                        <p>E25.00</p>
                        <div class="three-inline-buttons">
                            <button>-</button>
                            <button>2</button>
                            <button>+</button>
                        </div>
                        <buttonn class="add2cart-btn">Add to Cart</buttonn>
                    </div>
                </div>

                <div id="rice and chicken"> <!--IDENTIFIER-->
                    <div class="firstClass">
                        <img src="assets/images/food-134.jpg" alt="food">
                        <p>Rice&Chicken</p>
                        <p>E25.00</p>
                        <div class="three-inline-buttons">
                            <button>-</button>
                            <button>2</button>
                            <button>+</button>
                        </div>
                        <button class="add2cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer id="About">
        <?php 
        include "footer.php";
        ?>
    </footer>

</body>
</html>