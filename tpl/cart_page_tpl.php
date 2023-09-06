<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <!-- =========== custom css link =========== -->
    <link rel="stylesheet" href="assets/css/cart_page.css">
    <!-- =========== boxicons cdn =========== -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- =========== bootstrap css cdn =========== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        input[type="number"] {
            width: 40px;
        }
    </style>
</head>
<body class="pro">
    <!-- =========== navbar section start ============ -->
    <section class="nav">
        <div class="nav-bar">
            <div class="shop-sec">
                <button type="button" class="btn btn-primary">
                    <i class='bx bx-shopping-bag' ></i>
                     <!-- <span class="count-carts">4</span> -->
                  </button>
            </div>
        </div>
        <div class="nav-items">
            <div class="btn-item">
                 <i class='bx bx-help-circle' ></i>
            </div>
            <div class="btn-item">
                <i class='bx bx-cog'></i>
            </div>
            <div class="btn-item">
                <i class='bx bx-grid-small bx-rotate-90' ></i>
            </div>
            <div class="btn-item">
                <i class='bx bx-download'></i>
            </div>
            <div class="btn-item">
                <i class='bx bxs-user-pin'></i>
            </div>
            <a href="index.php" class="icon-nav">
                <div class="btn-item">
                    <i class='bx bx-home-alt-2'></i>
                </div>
            </a>
        </div>
    </section>
    <!-- ============ navbar section end ============ -->
    <!-- ============ card section start ============ -->
    <div class="gallery">
            <!-- product 1 -->
            <div class="content">   
                    <div class="content-title">
                      <div class="title-img">
                         <img src="assets/img/defIma.png" >
                      </div>

                      <div class="title-product-sec">
                         <h3 class="name-productr">laptop</h3>
                         <p class="title-product">x 315</p>
                     </div>
                    </div>
                    <div class="content-valve">
                        <p class="title-product">Number Remaining : 10</p>
                        <p  class="title-product" id="parents">Number Paymant : 10</p>
                    </div>

                    <div class="content-price">
                        <h6>68.00 $</h6>
                        <div class="price-icon">
                        <a href="?delete_task=" class="trash"><i class='bx bxs-trash'></i></a>
                    </div>
                </div>
            </div>
            <!-- product 2 -->
            <div class="content">   
                    <div class="content-title">
                      <div class="title-img">
                         <img src="assets/img/defIma.png" >
                      </div>

                      <div class="title-product-sec">
                         <h3 class="name-productr">laptop</h3>
                         <p class="title-product">x 315</p>
                     </div>
                    </div>
                    <div class="content-valve">
                        <p class="title-product">Number Remaining : 10</p>
                        <p  class="title-product" id="parents">Number Paymant : 10</p>
                    </div>

                    <div class="content-price">
                        <h6>68.00 $</h6>
                        <div class="price-icon">
                        <a href="?delete_task=" class="trash"><i class='bx bxs-trash'></i></a>
                    </div>
                </div>
            </div>

            <!-- payment -->
            <div class="content sum-payment">
                <p>Factor</p>
                <h2>Sum Price : 56800.00 $$</span></h2> 
                <button class="pay-btn" id="btnPayment">paymrnt</button>
            </div>
    </div>
    <!-- ============ card section end ============ -->
    <!-- ============ bootstrap js cdn =========== -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- ============ js file link =========== -->
    <script src="assets/js/index.js"></script>
    <footer class="footer">
        <p>create by hala team | programmer(Github) : codehod</p>
    </footer>
</body>

</html> 