<?php
error_reporting(0);
$urls = [
    "slider2.jpg", "slider3.jpg"
];

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
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="custom.css">
</head>

<body>
    <!-- navbar -->
    <?php
    include("nav.php");
    ?>
    <!-- main -->
    <main role="main" class="mx-5">

        <section class="jumbotron py-0 text-center">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/slider1.jpg" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block top-50">
                            <h5 class="display-4 font-weight-bold">The World Of Extreme Sports</h5>
                            <p class="font-weight-bold font-italic">
                                SAVE <span class="badge border-sharp badge-warning">20%</span> ON ALL APPAREL
                            </p>
                        </div>
                    </div>
                    <?php
                    foreach ($urls as $url) {
                    ?>
                        <div class="carousel-item">
                            <img src="images/<?php echo $url; ?>" class="d-block w-100" style="height: " alt="...">
                            <div class="carousel-caption d-none d-md-block top-50">
                                <h5 class="display-4 font-weight-bold">The World Of Extreme Sports</h5>
                                <p class="font-weight-bold font-italic">
                                    SAVE <span class="badge border-sharp badge-warning">20%</span> ON ALL APPAREL
                                </p>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <hr>
        <div class="album py-5 bg-light mt-5">
            <div class="">
                <h4 class="text-uppercase mb-5 text-center">Our Products</h4>
                    <?php
                    foreach ($products as $product) {
                    ?>
                        <div class="card m-5">
                            <div class="row no-gutters">
                                <div class="col-sm-5">
                                    <img class="card-img" src="<?php echo $product["image"]; ?>" alt="Suresh Dasari Card">
                                </div>
                                <div class="col-sm-7">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $product["pname"]; ?></h5>
                                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit tempora doloribus dignissimos aliquid praesentium minima, labore aspernatur magnam deserunt corporis laudantium. Qui beatae iure fugiat consequatur laudantium autem, odit obcaecati.</p>
                                        <p class="card-text">Quantity: <?php echo $product["quantity"]; ?></p>
                                        <a href="#" class="btn btn-primary">View Product</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>

    </main>

    <!-- footer -->
    <?php
    include("footer.php");
    ?>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>