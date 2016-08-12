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

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-82380818-1', 'auto');
    ga('send', 'pageview');
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