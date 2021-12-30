<?=$this->extend('layout/template');?>

<?=$this->section('content');?>
<div class="container" style="margin-top: 175px;">
    <section class="location-section">
        <h2 class="location-title">
            OUR LOCATION
        </h2>
        <div class="maps-content">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126907.03874925914!2d106.7320387994296!3d-6.284101892207697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1ec2422b0b3%3A0x39a0d0fe47404d02!2sJakarta%20Selatan%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1638187395621!5m2!1sid!2sid"
                width="100%" height="600" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
    <section class="location-section">
        <div class="d-flex justify-content-between p-4 px-5" style="background: #C9D3BF;">
            <div class="font-sedan me-5 w-100 d-flex flex-column justify-content-center">
                <h1 style="color: #5C3F2A;border-bottom: 1px solid #FFFFFF;">Cafe.in</h1>
                <h5 class="ms-3" style="color: #5C3F2A;">Our Locations</h5>
                <ul>
            <tr>
                <?php 
            foreach($location as $l){
            ?>
                    <li style="color: #D09400;">
                        <?= $l['address']; ?>
                    </li>
                <?php 
            }
                ?>
                </ul>
            </div>
            <img src="/images/locationbg.jpg" alt="store">
        </div>
    </section>
</div>
<?=$this->endSection();?>