<?php
$products = [
    ["id" => 1, "pname" => "Product A", "price" => "$345.00", "quantity" => "4", "image" => "https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cHJvZHVjdHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80"],
    ["id" => 2, "pname" => "Product B", "price" => "$342.00", "quantity" => "3", "image" => "https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/gh-052820-best-anti-aging-products-1590700658.png"],
    ["id" => 3, "pname" => "Product C", "price" => "$225.00", "quantity" => "2", "image" => "https://images.macrumors.com/t/u5qFUnuK3qopG8nIsOOX74kgtk8=/1600x0/article-new/2019/02/MR-Future-Products-2020-2.png"],
    ["id" => 4, "pname" => "Product D", "price" => "$543.00", "quantity" => "4", "image" => "https://images.unsplash.com/photo-1585155770447-2f66e2a397b5?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHN8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80"],
    ["id" => 5, "pname" => "Product E", "price" => "$765.00", "quantity" => "4", "image" => "https://i.insider.com/5ed95c393f7370198527eea3?width=700"],
    ["id" => 6, "pname" => "Product F", "price" => "$98.00", "quantity" => "8", "image" => "https://images.macrumors.com/t/u5qFUnuK3qopG8nIsOOX74kgtk8=/1600x0/article-new/2019/02/MR-Future-Products-2020-2.png"],
    ["id" => 7, "pname" => "Product J", "price" => "$456.00", "quantity" => "4", "image" => "https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cHJvZHVjdHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80"],
    ["id" => 8, "pname" => "Product K", "price" => "$410.00", "quantity" => "6", "image" => "https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/gh-052820-best-anti-aging-products-1590700658.png"],
    ["id" => 9, "pname" => "Product L", "price" => "$340.00", "quantity" => "4", "image" => "https://images.unsplash.com/photo-1585155770447-2f66e2a397b5?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHN8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80"],
    ["id" => 10, "pname" => "Product M", "price" => "$345.00", "quantity" => "7", "image" => "https://images.macrumors.com/t/u5qFUnuK3qopG8nIsOOX74kgtk8=/1600x0/article-new/2019/02/MR-Future-Products-2020-2.png"],

];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Assignment</title>
</head>

<body>
    <?php
    include("nav.php")
    ?>

    <div class="album py-5 bg-light mt-5">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php
                foreach ($products as $product) {
                ?>
                    <div class="col my-3">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" src=" <?php echo $product["image"] ?>" width="100%" height="225" />

                            <div class="card-body">
                                <h5 class="card-title"> <?php echo $product["pname"]; ?></h5>
                                <p class="card-text">Price: <?php echo $product["price"]; ?></p>
                                <p class="card-text">Quantity: <?php echo $product["quantity"]; ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <?php
    include("footer.php");
    ?>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>