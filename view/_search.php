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
    <div class="my-5 container" id="new">
        <div class="row">
        <?php $product_list = get_products_by_name($_GET['search']) ?>
            <?php foreach ($product_list as $product) { ?>
            <div class="col-md-4 mt-3 product-item col-sm-12 col-lg-3 d-flex">
                <div class="card">
                    <a href="product-detail.php?id=<?php echo $product['id']; ?>">
                        <img class="card-img-top" height="300px" src="<?php echo $product['img']; ?>" alt="Product">
                    </a>
                    <div class="card-body">
                        <p class="card-text fw-bold product-title"><?php echo $product['name'];?></p>
                        <small class="text-secondary">
                        <?php echo $product['price']; ?>
                        </small>
                    </div>
                </div> 
            </div>
            <?php } ?>
        </div>
        
    </div>
    

    <?php include 'inc/footer.php'; ?>
</body>

</html>