<?php get_header();
the_post();
?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">
            <small><?php wp_title(); ?></small>
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active"><?php wp_title(); ?></li>
        </ol>

        <?php
            $wp_query->get_queried_object();

            $posts = new WP_Query([
                    'post-type' => 'post',
                    'orderby' => 'date',
                    'order' => 'DSC',
                    'category_in' => $wp_query -> cat_ID
            ]);

            while ($posts->have_posts()):
            $posts->the_post();
        ?>

        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3><?php the_title();?></h3>
                <p><?php the_content();?></p>
                <a class="btn btn-primary" href="<?= get_permalink($post->id) ?>">View Project
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <?php
            endwhile;
            wp_reset_postdata();
        ?>




        <!-- Pagination -->
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>

    </div>
    <!-- /.container -->

<?php get_footer()?>