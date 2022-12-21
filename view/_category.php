<?php require_once 'core/boot.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="./view/public/css/style.css">
    <link rel="stylesheet" href="./view/public/css/bootstrap.min.css">
</head>

<body>
    <?php include 'inc/header.php'; ?>
    <?php include 'inc/navbar.php'; ?>

    <!-- breadcrums -->
    <div class="container mt-5">
        <div class="row">

            <div class="col">
                <div class="top-banner">
                    <div class="imge-top-banner">
                        <img src="./view/public/images/product01.png" width="250px" height="200px" alt="">
                    </div>
                    <div class="bg"></div>
                    <div class="text-top-banner">
                        <h3>Laptop<br>Collection</h3>
                        <a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="top-banner">
                    <div class="imge-top-banner">
                        <img src="./view/public/images/product02.png" width="250px" height="200px" alt="">
                    </div>
                    <div class="bg"></div>
                    <div class="text-top-banner">
                        <h3>Accessories<br>Collection</h3>
                        <a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="top-banner">
                    <div class="imge-top-banner">
                        <img src="./view/public/images/product04.png" width="250px" height="200px" alt="">
                    </div>
                    <div class="bg"></div>
                    <div class="text-top-banner">
                        <h3>Cameras<br>Collection</h3>
                        <a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    </li>
                </div>
            </div>
        </div>
    </div>

    <div class="container title-product">
        <div class="title-top-left">
            <h3 class="title">New Products</h3>
        </div>
        <div class="title-top-right">
            <ul>
                <li><a href="">Laptop</a></li>
                <li><a href="">Smartphones</a></li>
                <li><a href="">Camers</a></li>
                <li><a href="">Accessories</a></li>

            </ul>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <div class="filter-widget">
                    <h4 class="fw-title">Categories</h4>
                    <ul>
                        <li><a href=""></a>LapTops</li>
                        <li><a href=""></a>SmartPhones</li>
                        <li><a href=""></a>IPads</li>
                        <li><a href=""></a>Cameras</li>
                        <li><a href=""></a>Accessories</li>
                    </ul>
                </div>

                <div class="filter-widget">
                    <h4 class="fw-title">Brand</h4>
                    <ul>
                        <li><input type="checkbox">Dell</li>
                        <li><input type="checkbox">Lennovo</li>
                        <li><input type="checkbox">Iphone</li>
                        <li><input type="checkbox">Nokia</li>
                        <li><input type="checkbox">Hp</li>
                    </ul>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title"> product details</h4>
                    <ul>
                        <li><input type="checkbox"> </li>
                        <li><input type="checkbox"> </li>
                        <li><input type="checkbox"> </li>
                        <li><input type="checkbox"> </li>
                        <li><input type="checkbox"> </li>
                    </ul>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Color</h4>
                    <div class="fw-color d-flex">
                        <div class="color-circle-blue"></div>
                        <b>Blue</b>
                    </div>
                    <div class="fw-color d-flex ">
                        <div class="color-circle-red"></div>
                        <b>Red</b>
                    </div>
                    <div class="fw-color d-flex">
                        <div class="color-circle-pink"></div>
                        <b>Pink</b>
                    </div>
                    <div class="fw-color d-flex">
                        <div class="color-circle-yellow"></div>
                        <b>Yellow</b>
                    </div>
                    <div class="fw-color d-flex">
                        <div class="color-circle-orange"></div>
                        <b>Orange</b>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">

                <div class="product-list">
                    <div class="row">
                        <?php $product_list = get_all_products() ?>
                        <?php foreach ($product_list as $product) { ?>
                            <div class="col-lg-4">
                                <div class="card-center">
                                    <div class="card" style="width: 15rem;">
                                        <img src="<?php echo $product['img']?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">Tablet computer</h5>
                                            <p class="card-text"><?php echo $product['name']?></p>
                                            <p class="card-text">$<?php echo $product['price']?></p>
                                            <div class="icon-product">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </div>
                                            <a href="#" class="btn btn-danger">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                </div>
                <div class="col-lg-12">
                    <div class="load">
                        <i class="fa-sharp fa-solid fa-spinner"></i>
                        <a href="">
                            <h4>Loading More</h4>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <?php include 'inc/footer.php'; ?>
</body>

</html>