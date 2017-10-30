<?php
// Template Name:About
get_header();
the_post();?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">About
            <small>Subheading</small>
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active">About</li>
        </ol>

        <?php
        $hero = get_field('my_portrait')['sizes']['large'];
        $alt = get_field('my_portrait')['alt'];
        ?>


        <!-- Intro Content -->
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid rounded mb-4" src="<?= $hero?>" alt="<?=$alt?>">
                <?php the_content();?>
            </div>
        </div>
        <!-- /.row -->

        <!-- Our Customers -->
        <h2>Our Customers</h2>
        <div class="row">

            <?php
            while ( have_rows('customers') ) : the_row();
                $url = get_sub_field('logo')['url'];
                ?>

                <div class="col-lg-2 col-sm-4 mb-4">
                    <img class="img-fluid" src="<?= $url ?>" alt="">
                </div>

                <?php
            endwhile;
            ?>

    </div>
    <!-- /.container -->

<?php get_footer();?>