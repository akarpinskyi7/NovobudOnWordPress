<?php get_header(); the_post();?>

<section class="about-work">
    <div class="container relative">
        <div class="row">

            <!-- post content -->
            <div class="col-md-10 post-content m-auto">

                <!-- large post -->
                <article class="entry-item large-post">

	                <?php the_content(); ?>

<!--                    <div class="entry-header">-->
<!--                        <h1 class="entry-title">--><?php //the_title(); ?><!--</h1>-->
<!--                    </div>-->
                </article> <!-- end large post -->
            </div> <!-- end col -->

        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end content -->

<?php get_footer(); ?>
