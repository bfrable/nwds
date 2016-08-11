<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<section data-section="projects" class="projects">
    <div class="row">
        <h2>Projects</h2>

        <ul class="projects-list">
            <li class="columns small-12 large-6">
                <div class="project-image">
                    <?php
                    $a = new Area('Project Image 1');
                    $a->display($c);
                    ?>
                </div>
                <div class="project-content">
                    <span class="project-title">
                        <?php
                        $a = new Area('Project Title 1');
                        $a->display($c);
                        ?>
                    </span>
                    <?php
                    $a = new Area('Project Description 1');
                    $a->display($c);
                    ?>
                    <span class="project-value">
                    <?php
                    $a = new Area('Project Value 1');
                    $a->display($c);
                    ?>
                    </span>
                </div>
            </li>
            <li class="columns small-12 large-6">
                <div class="project-image">
                    <?php
                    $a = new Area('Project Image 2');
                    $a->display($c);
                    ?>
                </div>
                <div class="project-content">
                    <span class="project-title">
                        <?php
                        $a = new Area('Project Title 2');
                        $a->display($c);
                        ?>
                    </span>
                    <?php
                    $a = new Area('Project Description 2');
                    $a->display($c);
                    ?>
                    <span class="project-value">
                    <?php
                    $a = new Area('Project Value 2');
                    $a->display($c);
                    ?>
                    </span>
                </div>
            </li>
            <li class="columns small-12 large-6">
                <div class="project-image">
                    <?php
                    $a = new Area('Project Image 3');
                    $a->display($c);
                    ?>
                </div>
                <div class="project-content">
                    <span class="project-title">
                        <?php
                        $a = new Area('Project Title 3');
                        $a->display($c);
                        ?>
                    </span>
                    <?php
                    $a = new Area('Project Description 3');
                    $a->display($c);
                    ?>
                    <span class="project-value">
                    <?php
                    $a = new Area('Project Value 3');
                    $a->display($c);
                    ?>
                    </span>
                </div>
            </li>
            <li class="columns small-12 large-6">
                <div class="project-image">
                    <?php
                    $a = new Area('Project Image 4');
                    $a->display($c);
                    ?>
                </div>
                <div class="project-content">
                    <span class="project-title">
                        <?php
                        $a = new Area('Project Title 4');
                        $a->display($c);
                        ?>
                    </span>
                    <?php
                    $a = new Area('Project Description 4');
                    $a->display($c);
                    ?>
                    <span class="project-value">
                    <?php
                    $a = new Area('Project Value 4');
                    $a->display($c);
                    ?>
                    </span>
                </div>
            </li>
        </ul>
    </div>
</section>