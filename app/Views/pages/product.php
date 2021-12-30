<?=$this->extend('layout/template');?>

<?=$this->section('content');?>
<div class="container" style="margin-top: 175px;">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-9 my-5">
            <h1 class="py-5 text-center" style="color: #849F6A;font-size: 3rem;">OUR PRODUCT</h1>
        </div>
    </div>

    <section>
        <div class="row">
            <!-- CATEGORIES -->
            <div class="col-3 categories">
                <a href="/product" class="category <?php if ($cat === '') {
    echo 'active';
}
?>">
                    <h2>ALL</h2>
                </a>
                <a href="/product?cat=coffee" class="category <?php if ($cat === 'coffee') {
    echo 'active';
}
?>">
                    <h2>COFFEE</h2>
                </a>
                <a href="/product?cat=nonCoffee" class="category <?php if ($cat === 'nonCoffee') {
    echo 'active';
}
?>">
                    <h2>NON COFFEE</h2>
                </a>
                <a href="/product?cat=food" class="category <?php if ($cat === 'food') {
    echo 'active';
}
?>">
                    <h2>FOOD</h2>
                </a>
            </div>

            <!-- PRODUCTS COLUMN -->
            <div class="col-9 cafein-popular-product">
                <div class="row ms-5">
                    <!-- PRODUCTS -->
                    <?php
foreach ($product as $p) {

    ?>
                    <div class="product-card col-4" data-aos="fade-up" data-aos-delay="100">
                        <a class="component-popular d-block pb-0">
                            <div class="text-center">
                                <img src="/uploads/<?=$p['image'];?>" alt="" class="w-75" />
                            </div>
                            <div class="title"><?=$p['name'];?></div>
                            <div class="price">
                                Rp.<?php echo number_format($p['price'], 2, ',', '.') ?>,-</div>
                            <div class="font-sedan description">
                                <?=$p['description'];?>
                            </div>
                        </a>
                    </div>
                    <?php
}
?>
                </div>
            </div>
        </div>
    </section>
</div>
<?=$this->endSection();?>