<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php Loader::element('header_required') ?>

    <link rel="icon" href="<?=$view->getThemePath()?>/favicon.ico">

    <link rel="stylesheet" href="<?= $view->getThemePath() ?>/dist/styles/main.css">

    <script src="<?= $view->getThemePath() ?>/bower_components/modernizr/modernizr.js"></script>
</head>
<body>

<div class="<?= $c->getPageWrapperClass() ?>">

<header>
    <div class="row">
        <div class="logo">
            <a href="#hero" data-name="hero">North West Design Services</a>
        </div>
        <div class="columns small-12">
            <nav>
                <ul>
                    <li><a href="#services" data-name="services">Services</a></li>
                    <li><a href="#projects" data-name="projects">Projects</a></li>
                    <li><a href="#contact" data-name="contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>