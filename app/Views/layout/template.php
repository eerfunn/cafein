<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Cafe in - Buy Cofee Now</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="/styles/styles.css" rel="stylesheet" /> 

    <!-- font -->
    <link href="https://pagecdn.io/lib/easyfonts/sedan.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top p-0" style="background: #849f6a;height: 175px;" data-aos="fade-down">
        <div class="container p-0">
            <a href="<?=base_url()?>">
                <img src="/images/logo.svg" alt="logo" width="200" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarR">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarR">
                <ul class="navbar-nav flex-grow-1 justify-content-evenly">
                    <li class="nav-item <?php if ($title === 'home') {echo 'active';}?>">
                        <a href="<?=base_url()?>" class="nav-link">HOME</a>
                    </li>
                    <li class="nav-item  <?php if ($title === 'product') {echo 'active';}?>">
                        <a href="<?=base_url()?>/product" class="nav-link">PRODUCTS</a>
                    </li>
                    <li class="nav-item  <?php if ($title === 'about') {echo 'active';}?>">
                        <a href="<?=base_url()?>/about" class="nav-link">ABOUT US</a>
                    </li>
                    <li class="nav-item  <?php if ($title === 'location') {echo 'active';}?>">
                        <a href="<?=base_url()?>/location" class="nav-link">LOCATION</a>
                    </li>
                                </ul>
            </div>
        </div>
    </nav>
    <!-- Konten -->
    <?=$this->renderSection('content');?>

    <footer class="font-sedan p-5" style="margin-top: 10rem;">
        <div class="h-100 d-flex flex-column mx-5">
            <div class="flex-grow-1 d-flex justify-content-between mt-5">
                <div style="width: 400px;">
                    <h1 style="color: #EFCEBF;">CAFE.IN</h1>
                    <h5>
                        Get matched with a perfect coffee for you from the nation's best
                        roasters on Trade. Fresh coffee roasted to order
                    </h5>
                </div>
                <div>
                    <h2 style="color: #EFCEBF;">Contact US</h2>
                    <div class="d-flex w-25 justify-content-between">
                        <a href="instagram.com" class="socmed-logo"><img src="/images/logo-ig.svg"
                                alt="instagram" /></a>
                        <a href="twitter.com" class="socmed-logo"><img src="/images/logo-tw.svg" alt="twitter" />
                        </a>
                        <a href="facebook.com" class="socmed-logo"><img src="/images/logo-fb.svg" alt="facebook" /></a>
                    </div>
                    <p class="mt-3">TELEPHONE 0856 3489 3789</p>
                </div>
                <div>
                    <h5 style="color: #EFCEBF;">Subscribe to our newsletter and Get 10% off </h5>
                    <form class="d-flex">
                        <div class="form-group flex-grow-1">
                            <input type="email" name="suscribed-email" class="form-control"
                                placeholder="Enter your email..." />
                        </div>
                        <input type="submit" class="btn ms-3" value="Subscribe">
                    </form>
                </div>
            </div>
            <div class="watermark text-center">
                <div>
                    <p class="m-0">Jalan Melati No,37, Jakarta Selatan, DKI Jakarta.</p>
                    <p class="m-0">&copy; 2021 Cafe.In All Rights Reserved.</p>
                </div>
            </div>
    </footer>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="/vendor/jquery/jquery.slim.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
</body>

</html>