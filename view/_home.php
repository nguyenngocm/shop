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
</head>

<body>
  <header>
    <?php include 'inc/header.php'; ?>
    <?php include 'inc/navbar.php'; ?>
    <!-- place navbar here -->

  </header>
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
  <div class="product">
    <div class="container">
      <div class="row">
        <?php $product_list = get_all_products() ?>
        <?php foreach ($product_list as $product) { ?>
          <div class="col-lg-3 my-4">
            <div class="card-left">
              <div class="card" style="width: 18rem;">
                <a href="product-detail.php?id=<?php echo $product['id'] ?>">
                  <img src="<?php echo $product['img'] ?>" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                  <h5 class="card-title text-center"><?php echo $product['name'] ?></h5>
                  <p class="card-text">PRODUCT NAME GOES HERE</p>
                  <p class="card-text">$<?php echo $product['price'] ?></p>

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
  </div>



  <div class="container">
    <div class="row">
      <div class="col-lg-4 list-sider">
        <h4 class="" class="">TOP SELING</h4>
        <div id="formList">
          <div id="list">
            <div class="item">
              <div class="content">
              <?php $product_list = get_all_product_seller() ?>
                <?php foreach ($product_list as $product) { ?>
                  <div class="product-widget d-flex">
                    <a href="product-detail.php?id=<?php echo $product['id']?>">
                    <div class="product-img">
                      <img src="<?php echo $product['img']?>" alt="">
                    </div>
                    <div class="product-body">
                      <p class="product-category">Category</p>
                      <h3 class="product-name"><a href="#" tabindex="0">product name goes here</a></h3>
                      <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                    </div>
                    </a>
                  </div>
                <?php } ?>
              </div>
            </div>

            <div class="item">
              <div class="content">
              <?php $product_list = get_all_product_seller() ?>
                <?php foreach ($product_list as $product) { ?>
                  <div class="product-widget d-flex">
                    <a href="product-detail.php?id=<?php echo $product['id']?>">
                    <div class="product-img">
                      <img src="<?php echo $product['img']?>" alt="">
                    </div>
                    <div class="product-body">
                      <p class="product-category">Category</p>
                      <h3 class="product-name"><a href="#" tabindex="0">product name goes here</a></h3>
                      <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                    </div>
                    </a>
                  </div>
                <?php } ?>
              </div>
            </div>

            <div class="item">
              <div class="content">
              <?php $product_list = get_all_product_seller() ?>
                <?php foreach ($product_list as $product) { ?>
                  <div class="product-widget d-flex">
                    <a href="product-detail.php?id=<?php echo $product['id']?>">
                    <div class="product-img">
                      <img src="<?php echo $product['img']?>" alt="">
                    </div>
                    <div class="product-body">
                      <p class="product-category">Category</p>
                      <h3 class="product-name"><a href="#" tabindex="0">product name goes here</a></h3>
                      <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                    </div>
                    </a>
                  </div>
                <?php } ?>
              </div>
            </div>
            <div class="item">
              <div class="content">
              <?php $product_list = get_all_product_seller() ?>
                <?php foreach ($product_list as $product) { ?>
                  <div class="product-widget d-flex">
                    <a href="product-detail.php?id=<?php echo $product['id']?>">
                    <div class="product-img">
                      <img src="<?php echo $product['img']?>" alt="">
                    </div>
                    <div class="product-body">
                      <p class="product-category">Category</p>
                      <h3 class="product-name"><a href="#" tabindex="0">product name goes here</a></h3>
                      <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                    </div>
                    </a>
                  </div>
                <?php } ?>
              </div>
            </div>
            <div class="item">
              <div class="content">
              <?php $product_list = get_all_product_seller() ?>
                <?php foreach ($product_list as $product) { ?>
                  <div class="product-widget d-flex">
                    <a href="product-detail.php?id=<?php echo $product['id']?>">
                    <div class="product-img">
                      <img src="<?php echo $product['img']?>" alt="">
                    </div>
                    <div class="product-body">
                      <p class="product-category">Category</p>
                      <h3 class="product-name"><a href="#" tabindex="0">product name goes here</a></h3>
                      <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                    </div>
                    </a>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>


        <div class="direction">
          <button id="prev">
            < </button>
              <button id="next"> > </button>
        </div>
      </div>
      <div class="col-lg-4 list-sider">
        <h4 class="">TOP SELING</h4>
        <div id="formList">
          <div id="list">
            <div class="item">
              <div class="content">
              <?php $product_list = get_all_product_seller() ?>
                <?php foreach ($product_list as $product) { ?>
                  <div class="product-widget d-flex">
                    <a href="product-detail.php?id=<?php echo $product['id']?>">
                    <div class="product-img">
                      <img src="<?php echo $product['img']?>" alt="">
                    </div>
                    <div class="product-body">
                      <p class="product-category">Category</p>
                      <h3 class="product-name"><a href="#" tabindex="0">product name goes here</a></h3>
                      <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                    </div>
                    </a>
                  </div>
                <?php } ?>
              </div>
            </div>

            <div class="item">
              <div class="content">
              <?php $product_list = get_all_product_seller() ?>
                <?php foreach ($product_list as $product) { ?>
                  <div class="product-widget d-flex">
                    <a href="product-detail.php?id=<?php echo $product['id']?>">
                    <div class="product-img">
                      <img src="<?php echo $product['img']?>" alt="">
                    </div>
                    <div class="product-body">
                      <p class="product-category">Category</p>
                      <h3 class="product-name"><a href="#" tabindex="0">product name goes here</a></h3>
                      <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                    </div>
                    </a>
                  </div>
                <?php } ?>
              </div>
            </div>

            <div class="item">
              <div class="content">
               <?php $product_list = get_all_product_seller() ?>
                <?php foreach ($product_list as $product) { ?>
                  <div class="product-widget d-flex">
                    <a href="product-detail.php?id=<?php echo $product['id']?>">
                    <div class="product-img">
                      <img src="<?php echo $product['img']?>" alt="">
                    </div>
                    <div class="product-body">
                      <p class="product-category">Category</p>
                      <h3 class="product-name"><a href="#" tabindex="0">product name goes here</a></h3>
                      <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                    </div>
                    </a>
                  </div>
                <?php } ?>
              </div>
            </div>
            <div class="item">
              <div class="content">
              <?php $product_list = get_all_product_seller() ?>
                <?php foreach ($product_list as $product) { ?>
                  <div class="product-widget d-flex">
                    <a href="product-detail.php?id=<?php echo $product['id']?>">
                    <div class="product-img">
                      <img src="<?php echo $product['img']?>" alt="">
                    </div>
                    <div class="product-body">
                      <p class="product-category">Category</p>
                      <h3 class="product-name"><a href="#" tabindex="0">product name goes here</a></h3>
                      <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                    </div>
                    </a>
                  </div>
                <?php } ?>
              </div>
            </div>
            <div class="item">
              <div class="content">
              <?php $product_list = get_all_product_seller() ?>
              <?php $product_list = get_all_product_seller() ?>
                <?php foreach ($product_list as $product) { ?>
                  <div class="product-widget d-flex">
                    <a href="product-detail.php?id=<?php echo $product['id']?>">
                    <div class="product-img">
                      <img src="<?php echo $product['img']?>" alt="">
                    </div>
                    <div class="product-body">
                      <p class="product-category">Category</p>
                      <h3 class="product-name"><a href="#" tabindex="0">product name goes here</a></h3>
                      <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                    </div>
                    </a>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>


        <div class="direction">
          <button id="prev">
            < </button>
              <button id="next"> > </button>
        </div>
      </div>
      <div class="col-lg-4 list-sider">
        <h4 class="">TOP SELING</h4>
        <div id="formList">
          <div id="list">
            <div class="item">
              <div class="content">
                <?php $product_list = get_all_product_seller() ?>
                <?php foreach ($product_list as $product) { ?>
                  <div class="product-widget d-flex">
                    <a href="product-detail.php?id=<?php echo $product['id']?>">
                    <div class="product-img">
                      <img src="<?php echo $product['img']?>" alt="">
                    </div>
                    <div class="product-body">
                      <p class="product-category">Category</p>
                      <h3 class="product-name"><a href="#" tabindex="0">product name goes here</a></h3>
                      <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                    </div>
                    </a>
                  </div>
                <?php } ?>
              </div>
            </div>

            <div class="item">
              <div class="content">
              <?php $product_list = get_all_product_seller() ?>
                <?php foreach ($product_list as $product) { ?>
                  <div class="product-widget d-flex">
                  <a href="product-detail.php?id=<?php echo $product['id']?>">
                    <div class="product-img">
                      <img src="<?php echo $product['img']?>" alt="">
                    </div>
                    <div class="product-body">
                      <p class="product-category">Category</p>
                      <h3 class="product-name"><a href="#" tabindex="0">product name goes here</a></h3>
                      <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                    </div>
                    </a>
                <?php } ?>
              </div>
            </div>

            <div class="item">
              <div class="content">
              <?php $product_list = get_all_product_seller() ?>
                <?php foreach ($product_list as $product) { ?>
                  <div class="product-widget d-flex">
                  <a href="product-detail.php?id=<?php echo $product['id']?>">
                    <div class="product-img">
                      <img src="<?php echo $product['img']?>" alt="">
                    </div>
                    <div class="product-body">
                      <p class="product-category">Category</p>
                      <h3 class="product-name"><a href="#" tabindex="0">product name goes here</a></h3>
                      <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                    </div>
                    </a>
                  </div>
                <?php } ?>
              </div>
            </div>
            <div class="item">
              <div class="content">
              <?php $product_list = get_all_product_seller() ?>
                <?php foreach ($product_list as $product) { ?>
                  <div class="product-widget d-flex">
                  <a href="product-detail.php?id=<?php echo $product['id']?>">
                    <div class="product-img">
                      <img src="<?php echo $product['img']?>" alt="">
                    </div>
                    <div class="product-body">
                      <p class="product-category">Category</p>
                      <h3 class="product-name"><a href="#" tabindex="0">product name goes here</a></h3>
                      <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                    </div>
                    </a>
                  </div>
                <?php } ?>
              </div>
            </div>
            <div class="item">
              <div class="content">
              <?php $product_list = get_all_product_seller() ?>
                <?php foreach ($product_list as $product) { ?>
                  <div class="product-widget d-flex">
                    <a href="product-detail.php?id=<?php echo $product['id']?>">
                    <div class="product-img">
                      <img src="<?php echo $product['img']?>" alt="">
                    </div>
                    <div class="product-body">
                      <p class="product-category">Category</p>
                      <h3 class="product-name"><a href="#" tabindex="0">product name goes here</a></h3>
                      <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                    </div>
                    </a>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <div class="top-footer">
    <div class="text top-footer-text ">
      Sign Up for the NEWSLETTER
    </div>
    <form class="input-text text-center">
      <input class="input" type="email" placeholder="Enter Your Email">
      <button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
    </form>
    <div class="top-footer-icon">
      <a href="https://www.youtube.com/watch?v=arTUZFgBD94"><i class="fa-brands fa-youtube"></i></a>
      <a href="https://www.youtube.com/watch?v=arTUZFgBD94"><i class="fa-brands fa-youtube"></i></a>
      <a href="https://www.youtube.com/watch?v=arTUZFgBD94"><i class="fa-brands fa-youtube"></i></a>
      <a href="https://www.youtube.com/watch?v=arTUZFgBD94"><i class="fa-brands fa-youtube"></i></a>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->

    <!-- Copyright -->
  </footer>
  <!-- Footer -->

  <main>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>