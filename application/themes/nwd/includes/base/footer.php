<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<footer>
    <div class="row">
        <span class="legal">&copy; Copyright 2016. All Rights Reserved NW Design Services Ltd.</span>
        <ul class="social">
            <li><a href="#"><span class="icon"><img src="<?= $view->getThemePath() ?>/dist/images/logo-linkedin.png" alt="Linked In"></span></a></li>
        </ul>
    </div>
</footer>

</div>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X');ga('send','pageview');
</script>

<?php
$u = new User();
if(!$u->isLoggedIn()) {
?>
    
<script src="<?= $view->getThemePath() ?>/bower_components/jquery/dist/jquery.js"></script>

<?php
}
?>

<script src="<?= $view->getThemePath() ?>/bower_components/slick-carousel/slick/slick.min.js"></script>

<script src="<?= $view->getThemePath() ?>/dist/scripts/main.min.js"></script>

<?php Loader::element('footer_required') ?>
</body>
</html>