<?=$this->extend('layout/template');?>

<?=$this->section('content');?>
<!-- JUMBOTRON -->
<div class="container welcome-cafein py-5">
    <section class="d-flex">
        <h1 class="font-sedan text-white m-auto display-2">Welcome to Cafein</h1>
    </section>
</div>

<!-- BANNER CAROUSEL -->
<div class="container my-5 py-5">
    <section>
        <div data-aos="fade-up">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- <div class="carousel-item active">
                        <img src="/images/blank.png" class="d-block w-100" alt="...">
                    </div> -->
                    <?php
$i = 1;
foreach ($banner as $b) {
    if ($i == 1) {
        echo "<div class='carousel-item active'>";
        $i++;
    } else {
        echo "<div class='carousel-item'>";
    }
    ?>
                    <img src="/uploads/<?=$b['preview'];?>" class="d-block w-100"
                        style="max-height: 523.34px;max-width:1296px" alt="...">
                </div>

                <?php }?>
                <!--
    <div class="carousel-item">
      <img src="/images/banner-coffeeopen.png" class="d-block w-100" alt="...">
    </div> -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
</div>
</section>
</div>

<!-- POPULAR PRODUCTS -->
<div class="container">
    <section class="cafein-popular-product mx-5">
        <div data-aos="fade-up">
            <h1 class="text-center">POPULAR PRODUCTS</h1>
        </div>
        <div class="row m-5">
            <?php
$i = 0;
foreach ($product as $p) {
    if ($i++ == 4) {
        break;
    }
    ?>
            <div class="col-6 col-md-3 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <a href="#" class="component-popular d-block">
                    <div class="text-center">
                        <img src="/uploads/<?=$p['image'];?>" alt="" class="w-75" />
                    </div>
                    <div class="popular-text"><?=$p['name'];?></div>
                    <div class="product-rating"><?=$p['rating'];?>/5</div>
                </a>
            </div>
            <?php
}
?>

        </div>
    </section>
</div>
<?=$this->endSection();?>