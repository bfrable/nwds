<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<section data-section="services" class="services">
    <div class="row">
        <h2>Services</h2>
        <ul class="icons-list icons-list--services js-services">
            <li class="active slide-0">
                <span class="icon icon--mechanical" data-service=""><img src="<?= $view->getThemePath() ?>/dist/images/icon-gear.png" alt=""></span>
                <span class="service-title">Mechanical <br>Engineering</span>
            </li>
            <li class="slide-1">
                <span class="icon icon--electrical" data-service=""><img src="<?= $view->getThemePath() ?>/dist/images/icon-electrical.png" alt=""></span>
                <span class="service-title">Electrical <br>Engineering</span>
            </li>
            <li class="slide-2">
                <span class="icon icon--energy" data-service=""><img src="<?= $view->getThemePath() ?>/dist/images/icon-lightbulb.png" alt=""></span>
                <span class="service-title">Renewable Energy <br>&amp; Sustainability</span>
            </li>
            <li class="slide-3">
                <span class="icon icon--assesment" data-service=""><img src="<?= $view->getThemePath() ?>/dist/images/icon-doc.png" alt=""></span>
                <span class="service-title">Energy <br>Assesment</span>
            </li>
        </ul>
    </div>
    <div class="services-content">
        <div class="row">
            <div class="service-content">

                <?php
                $a = new Area('Mechanical Engineering Content');
                $a->display($c);
                ?>

            </div>
            <div class="service-content">

                <?php
                $a = new Area('Electrical Engineering Content');
                $a->display($c);
                ?>

            </div>
            <div class="service-content">

                <?php
                $a = new Area('Renewable Energy Content');
                $a->display($c);
                ?>

            </div>
            <div class="service-content">

                <?php
                $a = new Area('Energy Assesment');
                $a->display($c);
                ?>

            </div>
        </div>
    </div>
</section>