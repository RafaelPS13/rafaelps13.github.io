<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Area Gerência</title>
    <!-- Bootstrap link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- jquery link  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Google Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi+Ink&display=swap" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri+Quran&family=Reem+Kufi+Ink&display=swap" rel="stylesheet">



</head>

<body class="paginas">
    <div class="container" style="margin-top: 90px;">
        <div class="row">
            <div class="col">
                <nav class="navbar bg-light fixed-top">
                    <div class="container-fluid">
                        <h2 class="cafe" href="#">BookCoffee</h2>
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                            aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">BookCoffee</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                        <a class="nav-link" href="#">Mesas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Cardápio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php">Área da Gerência</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>

                <div class="container">
                    <div class="row">
                        <div class="col"></div>

                        <div class="row row-cols-1 col-lg-8 row-cols-md-3 g-4">
                            <div class="col">
                                <div class="card">
                                    <img src="https://previews.123rf.com/images/aksenovayu/aksenovayu1510/aksenovayu151000041/47191025-wine-and-candles-on-the-table-and-chair-silhouette-silhouette-of-a-table-in-a-cafe-table-with-wine-a.jpg" class="card-img-top" alt="mesa01">
                                    <div class="card-body">
                                        <h5 class="card-title">MESA 01</h5>
                                        <!-- STATUS DA MESA -->
                                        <span id="status"></span>
                                        <center>
                                            <a href="area_cardapio.php" class="btn btn-primary">Cardápio</a>
                                        </center>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card">
                                    <img src="https://previews.123rf.com/images/aksenovayu/aksenovayu1510/aksenovayu151000041/47191025-wine-and-candles-on-the-table-and-chair-silhouette-silhouette-of-a-table-in-a-cafe-table-with-wine-a.jpg" class="card-img-top" alt="mesa02">
                                    <div class="card-body">
                                        <h5 class="card-title">MESA 02</h5>
                                        <!-- STATUS DA MESA -->
                                        <span id="status"></span>
                                        <center>
                                            <a href="area_cardapio.php" class="btn btn-primary">Cardápio</a>
                                        </center>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card">
                                    <img src="https://previews.123rf.com/images/aksenovayu/aksenovayu1510/aksenovayu151000041/47191025-wine-and-candles-on-the-table-and-chair-silhouette-silhouette-of-a-table-in-a-cafe-table-with-wine-a.jpg" class="card-img-top" alt="mesa03">
                                    <div class="card-body">
                                        <h5 class="card-title">MESA 03</h5>
                                        <!-- STATUS DA MESA -->
                                        <span id="status"></span>
                                        <center>
                                            <a href="area_cardapio.php" class="btn btn-primary">Cardápio</a>
                                        </center>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card">
                                    <img src="https://previews.123rf.com/images/aksenovayu/aksenovayu1510/aksenovayu151000041/47191025-wine-and-candles-on-the-table-and-chair-silhouette-silhouette-of-a-table-in-a-cafe-table-with-wine-a.jpg" class="card-img-top" alt="mesa04">
                                    <div class="card-body">
                                        <h5 class="card-title">MESA 04</h5>
                                        <!-- STATUS DA MESA -->
                                        <span id="status"></span>
                                        <center>
                                            <a href="area_cardapio.php" class="btn btn-primary">Cardápio</a>
                                        </center>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card">
                                    <img src="https://previews.123rf.com/images/aksenovayu/aksenovayu1510/aksenovayu151000041/47191025-wine-and-candles-on-the-table-and-chair-silhouette-silhouette-of-a-table-in-a-cafe-table-with-wine-a.jpg" class="card-img-top" alt="mesa05">
                                    <div class="card-body">
                                        <h5 class="card-title">MESA 05</h5>
                                        <!-- STATUS DA MESA -->
                                        <span id="status"></span>
                                        <center>
                                            <a href="area_cardapio.php" class="btn btn-primary">Cardápio</a>
                                        </center>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card">
                                    <img src="https://previews.123rf.com/images/aksenovayu/aksenovayu1510/aksenovayu151000041/47191025-wine-and-candles-on-the-table-and-chair-silhouette-silhouette-of-a-table-in-a-cafe-table-with-wine-a.jpg" class="card-img-top" alt="mesa06">
                                    <div class="card-body">
                                        <h5 class="card-title">MESA 06</h5>
                                        <!-- STATUS DA MESA -->
                                        <span id="status"></span>
                                        <center>
                                            <a href="area_cardapio.php" class="btn btn-primary">Cardápio</a>
                                        </center>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



    <script src="javascript/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>