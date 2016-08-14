<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<section data-section="contact" class="contact-us">
    <div class="row">
        <h2>Contact Us</h2>
        <?php
        $a = new Area('Contact Content');
        $a->display($c);
        ?>
        <ul class="icons-list icons-list--contact-options">
            <li class="columns small-12 large-4">
                <span class="icon"><img src="<?= $view->getThemePath() ?>/dist/images/icon-marker.png" alt=""></span>
                <a href="https://www.google.co.uk/maps/place/Goyt+Mill,+Upper+Hibbert+Ln,+Marple,+Stockport+SK6+7HX/@53.3851484,-2.0671568,17z/data=!3m1!4b1!4m5!3m4!1s0x487bb545a41259e9:0x6b3580dc8263145a!8m2!3d53.3851484!4d-2.0649681" target="_blank">
                    <p>North West Design Services</p>
                    <p>Unit 40, Goyt Mill,</p>
                    <p>Upper Hibbert Lane, Marple,</p>
                    <p>Stockport , SK6 7HX</p>
                </a>
            </li>
            <li class="columns small-12 large-4">
                <span class="icon"><img src="<?= $view->getThemePath() ?>/dist/images/icon-envelope.png" alt=""></span>
                <p><a href="mailto:info@nw-designservices.co.uk">Info@nw-designservices.co.uk</a></p>
            </li>
            <li class="columns small-12 large-4">
                <span class="icon"><img src="<?= $view->getThemePath() ?>/dist/images/icon-phone.png" alt=""></span>
                <p><a href="tel:+44(0)1614270300">+44 (0)161 427 0300</a></p>
            </li>
        </ul>
    </div>

    <?php
    $this->inc('includes/sections/certifications.php');
    ?>

</section>