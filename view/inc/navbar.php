<nav class="navbar navbar-expand-lg navbar-light bg-light w-100 name">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand w-10" href="#"><img src="./view/public/images/logo.png" width="100px" height="100px" alt=""></a>

      <div class="collapse navbar-collapse " id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ms-auto w-50">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="category.php">HotDeals</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./Introrduce.html">Introduce</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./contact.html">Contact</a>
          </li>
        </ul>
        <form method="get" action="search.php" class="form-inline my-2 my-lg-0 b me-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
          <button class=" btn btn-danger  my-2 my-sm-0" type="submit">Search</button>
        </form>
        <div class="menu-icon me-auto "><a href="cart.php"><label for=""><i class="fa-solid fa-cart-shopping"></i></label>
        <span class="badge rounded-pill bg-secondary m-2">
              <?php echo number_cart_product() ?>
            </span></a>
          <i class="fa-solid fa-heart"></i>
        </div>
      </div>
    </nav>