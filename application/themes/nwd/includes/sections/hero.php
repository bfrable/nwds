<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<section class="hero">
    <div class="row">
        <div class="logo">
            <a href="#">North West Design Services</a>
        </div>

        <h2>North West <br>Design Services</h2>

        <div class="content">

            <?php
                $a = new Area('Hero Content');
                $a->display($c);
            ?>

        </div>
    </div>
</section>