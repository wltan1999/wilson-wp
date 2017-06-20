<?php
/*
 * Template Name: Homepage
 */

get_header();
?>
<div class="row">
    <div class="col-sm-12">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="https://placehold.it/1920x400?text=IMAGE" alt="Image">
                    <div class="carousel-caption">
                        <h3>Slider 1 Heading</h3>
                        <p>Slider 1 Text</p>
                    </div>      
                </div>

                <div class="item">
                    <img src="https://placehold.it/1920x400?text=Another Image Maybe" alt="Image">
                    <div class="carousel-caption">
                        <h3>Slider 2 Heading</h3>
                        <p>Slider 2 Text</p>
                    </div>      
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-sm-12 text-center">
        <div>
            <h1><?php echo get_field('hero_title'); ?></h1>
        </div>
        <div>
            <h2><?php echo get_field('hero_sub_title'); ?></h2>
        </div>
        <?php echo apply_filters('the_content', get_field('hero_text')); ?>
    </div> 
</div>
<hr>
</div>

<div class="container text-center">    
    <h3><?php echo get_field('what_we_do_title'); ?></h3>
    <br>

    <?php
    // check if the repeater field has rows of data
    if (have_rows('projects')):
        ?>
        <div class="row">

            <?php
            // loop through the rows of data
            while (have_rows('projects')) : the_row();
                ?>

                <div class="col-sm-3">
                    <img src="<?php echo get_sub_field('project_image'); ?>" class="img-responsive" style="width:100%" alt="Image">
                    <?php echo apply_filters('the_content', get_sub_field('project_name')); ?>
                </div>

                <?php
            endwhile;
        else :
        // no rows found
        endif;
        ?>
    </div>
    <hr>
</div>

<div class="container text-center">    
    <h3>Our Partners</h3>
    <br>
    <div class="row">
        <div class="col-sm-2">
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            <p>Partner 1</p>
        </div>
        <div class="col-sm-2"> 
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            <p>Partner 2</p>    
        </div>
        <div class="col-sm-2"> 
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            <p>Partner 3</p>
        </div>
        <div class="col-sm-2"> 
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            <p>Partner 4</p>
        </div> 
        <div class="col-sm-2"> 
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            <p>Partner 5</p>
        </div>     
        <div class="col-sm-2"> 
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            <p>Partner 6</p>
        </div> 
    </div>
    <?php get_footer(); ?>