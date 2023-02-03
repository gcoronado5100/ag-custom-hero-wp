<?php

/**
 * This file contains the template to use with output buffer
 * on the front end
 */

function ag_hero_template($atts)
{

    ob_start();

    $content = shortcode_atts(array(
        'video' => '',
        'title' => '',
        'title-tag' => 'h1',
        'sub-title' => '',
        'sub-title-tag' => 'h3'
    ), $atts);
?>
    <!-- Here goes the content -->

    <div class="ag-hero__banner">

        <video autoplay muted loop src="<?= $content['video'] ?>"></video>

        <div class="ag-content__container">

            <?php if ($content['sub-title']) : ?>
                <div class="subtitle__container">
                    <i class="fa-solid fa-arrow-down"></i>
                    <<?= $content['sub-title-tag'] ?> class="sub-title"><?= $content['sub-title'] ?></<?= $content['sub-title-tag'] ?>>
                </div>
            <?php endif; ?>

            <<?= $content['title-tag'] ?> class="title"><?php echo ($content['title']) ? $content['title'] : 'Hello World' ?></<?= $content['title-tag'] ?>>
        </div>
    </div>


    <!--   -->
<?php
    $output = ob_get_contents();
    ob_end_clean();

    return $output;
}
