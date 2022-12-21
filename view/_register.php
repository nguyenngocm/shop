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

    <!-- form wrapper -->

   <div class="container">
    <h1>Register</h1>
    <form action="register.php" method="post">
        <input type="email" name="email" placeholder="username"><br>
        <input type="password" name="password" placeholder="password"><br>
        <input type="password" name="password" placeholder="enter password"><br>
        <button type="submit">Đắng kí</button>
    </form>
   </div>
   
    <!-- form wrapper end -->

    <?php include 'inc/footer.php'; ?>
</body>

</html>