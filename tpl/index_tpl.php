<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>

    <!-- =========== custom css link =========== -->
    <link rel="stylesheet" href="assets/css/index.css">
    <!-- =========== boxicons cdn =========== -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- =========== bootstrap css cdn =========== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="pro">
    <!-- =========== navbar section start ============ -->
    <section class="nav">
        <div class="nav-bar">
            <div class="shop-sec">
                <a href="cart_page.php" class="btn_shop">
                    <button type="button" class="btn btn-primary">
                        <i class='bx bx-shopping-bag'></i>
                        <span class="count-carts">4</span>
                    </button>
                </a>
            </div>
        </div>
       
        <div class="nav-items">
            <div class="btn-item ">
                 <i class='bx bx-help-circle' ></i>
            </div>
            <div class="btn-item ">
                <i class='bx bx-cog'></i>
            </div>
            <div class="btn-item ">
                <i class='bx bx-grid-small bx-rotate-90' ></i>
            </div>
            <div class="btn-item ">
                <i class='bx bx-download '></i>
            </div>
            <div class="btn-item ">
                <i class='bx bxs-user-pin'></i>
            </div>
            <div class="btn-item ">
                <i class='bx bx-home-alt-2'></i>
            </div>
        </div>
        
    </section>
   
    <!-- ============ navbar section end ============ -->
    <!-- ============ card section start ============ -->
    <div class="gallery">
                <!-- product 1 -->
                <div class="content">
                    <img src="assets/img/defIma.png"  class="content-img">
                    <h3 class="name-productr">laptop</h3>
                    <p class="title_product">x 315</p>
                    <h6>68.00 $</h6>
                    <ul class="stars-point">
                        <li><i class='bx bxs-star check i-star'></i></li>
                        <li><i class='bx bxs-star check i-star'></i></li>
                        <li><i class='bx bxs-star check i-star'></i></li>
                        <li><i class='bx bxs-star check i-star'></i></li>
                        <li><i class='bx bx-star i-star'></i></li>
                    </ul>
                    <a href="cart_page.php?payment=<?= $values[0] ?>"><button class="buy-1 btn-s btn-payment">Buy Now</button></a>
                </div>
                <!-- product 2 -->
                <div class="content">
                    <img src="assets/img/defIma.png"  class="content-img">
                    <h3 class="name-productr">laptop</h3>
                    <p class="title_product">x 315</p>
                    <h6>68.00 $</h6>
                    <ul class="stars-point">
                        <li><i class='bx bxs-star check i-star'></i></li>
                        <li><i class='bx bxs-star check i-star'></i></li>
                        <li><i class='bx bxs-star check i-star'></i></li>
                        <li><i class='bx bxs-star check i-star'></i></li>
                        <li><i class='bx bx-star i-star'></i></li>
                    </ul>
                    <a href="cart_page.php?payment=<?= $values[0] ?>"><button class="buy-1 btn-s btn-payment">Buy Now</button></a>
                </div>
                <!-- product 4 -->
                <div class="content">
                    <img src="assets/img/defIma.png"  class="content-img">
                    <h3 class="name-productr">laptop</h3>
                    <p class="title_product">x 315</p>
                    <h6>68.00 $</h6>
                    <ul class="stars-point">
                        <li><i class='bx bxs-star check i-star'></i></li>
                        <li><i class='bx bxs-star check i-star'></i></li>
                        <li><i class='bx bxs-star check i-star'></i></li>
                        <li><i class='bx bxs-star check i-star'></i></li>
                        <li><i class='bx bx-star i-star'></i></li>
                    </ul>
                    <a href="cart_page.php?payment=<?= $values[0] ?>"><button class="buy-1 btn-s btn-payment">Buy Now</button></a>
                </div>
                <!-- product 5 -->
                <div class="content">
                    <img src="assets/img/defIma.png"  class="content-img">
                    <h3 class="name-productr">laptop</h3>
                    <p class="title_product">x 315</p>
                    <h6>68.00 $</h6>
                    <ul class="stars-point">
                        <li><i class='bx bxs-star check i-star'></i></li>
                        <li><i class='bx bxs-star check i-star'></i></li>
                        <li><i class='bx bxs-star check i-star'></i></li>
                        <li><i class='bx bxs-star check i-star'></i></li>
                        <li><i class='bx bx-star i-star'></i></li>
                    </ul>
                    <a href="cart_page.php?payment=<?= $values[0] ?>"><button class="buy-1 btn-s btn-payment">Buy Now</button></a>
                </div>
    </div>
    <!-- ============ card section end ============ -->
    <!-- ============ bootstrap js cdn =========== -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- ============ js file link =========== -->
    <script src="assets/js/index.js"></script>
    <!-- cdn  -->
</body>

</html> 