<?=$this->extend('layout/template');?>

<?=$this->section('content');?>
<div class="container" style="margin-top: 175px;">

    <!-- ABOUT STORE -->
    <section class="about-section">
        <h2 class="about-title">
            ABOUT STORE
        </h2>
        <div class="card about-card" data-aos="fade-up" data-aos-delay=100>
            <div class="card-body p-5">
                <div class="d-flex justify-content-between" style="height: 400px;">
                    <img src="/images/store1.jpg" alt="store 1" />
                    <img src="/images/store2.jpg" alt="store 2" />
                    <img src="/images/store3.jpg" alt="store 3" />
                </div>
                <div class="mt-4 text-center font-sedan">
                    <p>
                        Hailing all the way from Bogor, West Java, known as the city of rain.<br /> Cafe.In first
                        started
                        out in June 2019.
                    </p>
                    <p>
                        Today, Cafe.in has evolved into a lifestyle café serving up a full-range menu. <br />From
                        coffee
                        to desserts and savouries.
                    </p>
                </div>
            </div>
    </section>

    <!-- ABOUT FOUNDER -->
    <section class="about-section">
        <h2 class="about-title">ABOUT FOUNDER</h2>
        <div class="row">
            <div class="col-4">
                <div class="card about-card" data-aos="fade-up" data-aos-delay=100>
                    <div class="card-body d-flex flex-column align-items-center">
                        <img src="/images/founder.jpg" alt="" style="max-height: 300px;">
                        <h4 class="font-sedan my-2">Dana Spiotta</h4>
                        <small class="rounded-pill py-1 px-4" style="border: .100rem solid #34C759;">FOUNDER</small>
                    </div>
                </div>
            </div>
            <div class="col-8 d-flex align-items-center justify-content-center">
                <p class="h3 w-75 font-sedan" style="text-align: justify;"><span class="display-5 fw-bolder">“
                    </span>Although
                    a great
                    restaurant experience must
                    include great
                    food, a bad
                    restaurant
                    experience can be
                    achieved through bad service alone. Ideally, service is invisible. You notice it only when something
                    Radius.<span class="display-5 fw-bolder"> ”</span>
                </p>
            </div>
        </div>
    </section>
    <!-- ABOUT CHANNEL -->
    <section class="about-section">
        <h2 class="about-title">
            OUR CHANNEL
        </h2>
        <div class="row font-sedan fw-bold">
            <div class="col-6">
                <div class="card about-card" data-aos="fade-up" data-aos-delay=100>
                    <div class="card-body">
                        <div class="img-card text-center">
                            <div class="ratio ratio-16x9">
                                <iframe width="853" height="480" src="https://www.youtube.com/embed/TFJz_gSxU2w"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <h4 class="mt-3">CAFEIN X
                                CIMORY - YOGHURT SERIES</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card about-card" data-aos="fade-up" data-aos-delay=200>
                    <div class="card-body">
                        <div class="img-card text-center">
                            <div class="ratio ratio-16x9">
                                <iframe width="853" height="480" src="https://www.youtube.com/embed/twM7ulKpPjI"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <h4 class="mt-3">CAFEIN X
                                CIMORY - YOGHURT SERIES</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?=$this->endSection();?>