<?php require_once 'core/boot.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./view/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./view/public/css/style.css">
    <link rel="stylesheet" href="./view/public/css/styles.css">
    <link rel="stylesheet" href="./view/public/css/lgrs.css">
</head>

<body>
    <header>
        <style>
            .cart-page {

                display: flex;
                justify-content: center;
                margin-top: 60px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }

            .cart-info {
                display: flex;
                flex-wrap: wrap;
            }

            td img {
                width: 80px;
                height: 80px;
                margin-right: 10px;
            }

            th {
                text-align: left;
                padding: 5px;
                color: #fff;
                background-color: #ff523b;
                font-weight: normal;
            }

            td {
                padding: 10px 5px;
            }

            td input {
                width: 40px;
                height: 30px;
                padding: 5px;

            }

            td a {
                color: #ff523b;
                font-size: 12px;
                text-decoration: none;
            }

            .total-price {

                display: flex;
                justify-content: flex-end;
            }

            .total-price table {
                border-top: 3px solid #ff523b;
                width: 100%;
                max-width: 350px;
            }

            td:last-child {
                text-align: right;
            }

            th:last-child {
                text-align: right;
            }
            .checkout{
        float: right ;
        
    }
    .checkout a{
        
        text-decoration: none;
        margin: 30px 120px;
    }

 
 
        </style>
        <?php include 'inc/header.php'; ?>
        <?php include 'inc/navbar.php'; ?>
        <!-- place navbar here -->
        <div class="container py-4 flex items-center gap-3">
        <a href="index.php" class="text-primary text-base">
            <i class="fas fa-home"></i>
        </a>
        <span class="text-sm text-gray-400">
            <i class="fas fa-chevron-right"></i>
        </span>
        <p class="text-gray-600 font-medium">Cart</p>
    </div>
    <!-- breadcrums end-->

    <!-- cart wrapper -->
    <div class="container lg:grid grid-cols-12 gap-6 items-start pb-16 pt-4">
        <!-- product cart -->
        <div class="xl:col-span-9 lg:col-span-8">
            <!-- cart title -->
            <div class="bg-gray-200 py-2 pl-12 pr-20 xl:pr-28 mb-4 hidden md:flex">
                <p class="text-gray-600 text-center">Product</p>
                <p class="text-gray-600 text-center ml-auto mr-16 xl:mr-24">Quantity</p>
                <p class="text-gray-600 text-center">Total</p>
            </div>
            <!-- cart title end -->

            <!-- shipping carts -->
            <div class="space-y-4">
                <?php $cart_list = get_cart(); ?>
                <?php foreach ($cart_list as $order_detail) { ?>
                    <!-- single cart -->
                    <div class="flex items-center md:justify-between gap-4 md:gap-6 p-4 border border-gray-200 rounded flex-wrap md:flex-nowrap">
                        <!-- cart image -->
                        <div class="w-32 flex-shrink-0">
                            <img src="" class="w-full">
                        </div>
                        <!-- cart image end -->
                        <!-- cart content -->
                        <div class="md:w-1/3 w-full">
                            <h2 class="text-gray-800 mb-3 xl:text-xl textl-lg font-medium uppercase">
                                <?php echo $order_detail['name'] ?>
                            </h2>
                            <p class="text-primary font-semibold">$<?php echo $order_detail['price'] ?></p>
                            <p class="text-gray-500">Size: M</p>
                        </div>
                        <!-- cart content end -->
                        <!-- cart quantity -->
                        <div class="flex border border-gray-300 text-gray-600 divide-x divide-gray-300">
                            <form action="cart.php" method="post" class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">
                                <input type="hidden" name="action" value="update">
                                <input type="hidden" name="value" value="-1">
                                <input type="hidden" name="productId" value="<?php echo $order_detail['product_id']; ?>">
                                <button type="submit">-</button>
                            </form>
                            <div class="h-8 w-10 flex items-center justify-center">
                                <?php echo $order_detail['quantity']; ?>
                            </div>
                            <form action="cart.php" method="post" class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">
                                <input type="hidden" name="action" value="update">
                                <input type="hidden" name="value" value="1">
                                <input type="hidden" name="productId" value="<?php echo $order_detail['product_id']; ?>">
                                <button type="submit">+</button>
                            </form>
                        </div>
                        <!-- cart quantity end -->
                        <div class="ml-auto md:ml-0">
                            <p class="text-primary text-lg font-semibold">$<?php echo total_cart_item($order_detail['price'], $order_detail['quantity']); ?></p>
                        </div>
                        <div class="text-gray-600 hover:text-primary cursor-pointer">
                            <form action="cart.php" method="post">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="productId" value="<?php echo $order_detail['product_id']; ?>">
                                <button type="submit" class="fas fa-trash"></button>
                            </form>
                        </div>
                    </div>
                    <!-- single cart end -->
                <?php } ?>
            </div>
            <!-- shipping carts end -->
        </div>
        <!-- product cart end -->
        <!-- order summary -->
        <div class="xl:col-span-3 lg:col-span-4 border border-gray-200 px-4 py-4 rounded mt-6 lg:mt-0">
            <h4 class="text-gray-800 text-lg mb-4 font-medium uppercase">ORDER SUMMARY</h4>
            <div class="space-y-1 text-gray-600 pb-3 border-b border-gray-200">
                <div class="flex justify-between font-medium">
                    <p>Subtotal</p>
                    <p>$<?php echo total_cart(); ?></p>
                </div>
                <div class="flex justify-between">
                    <p>Delivery</p>
                    <p>Free</p>
                </div>
                <div class="flex justify-between">
                    <p>Tax</p>
                    <p>Free</p>
                </div>
            </div>
            <div class="flex justify-between my-3 text-gray-800 font-semibold uppercase">
                <h4>Total</h4>
                <h4>$<?php echo total_cart(); ?></h4>
            </div>

            <!-- searchbar -->
            <div class="flex mb-5">
                <input type="text" class="pl-4 w-full border border-r-0 border-primary py-2 px-3 rounded-l-md focus:ring-primary focus:border-primary text-sm" placeholder="Coupon">
                <button type="submit" class="bg-primary border border-primary text-white px-5 font-medium rounded-r-md hover:bg-transparent hover:text-primary transition text-sm font-roboto">
                    Apply
                </button>
            </div>
            <!-- searchbar end -->

            <!-- checkout -->
            <a href="checkout.php" class="bg-primary border border-primary text-white px-4 py-3 font-medium rounded-md uppercase hover:bg-transparent
             hover:text-primary transition text-sm w-full block text-center">
                Process to checkout
            </a>
            <!-- checkout end -->
        </div>
        <!-- order summary end -->
    </div>

    </header>
   
    <?php include 'inc/footer.php'; ?>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>