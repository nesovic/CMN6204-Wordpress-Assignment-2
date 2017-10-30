<?php

//Template Name: Practice Template


//echo '<h1>This is an example of a very basic WP_Query Loop.</h1>';
//$query = new WP_Query([
//    'post_type' => 'post'
//]);
//while($query->have_posts()) {
//    $query->the_post();
//    echo the_title();
//    echo '<br>';
//}

echo '<h1>Task 1</h1>';

$query = new WP_Query([
    'post_type' => 'post',
    'orderby' => 'modified',
    'posts_per_page' => 2
]);

while ($query->have_posts()){
    $query->the_post();
    echo the_title();
    echo "<br>";
}

wp_reset_postdata();

// za ceo post the_content() a za title the_title()

echo "<h1>Task2</h1>";
$query = new WP_Query([
    'post_type' => 'page',
    'order' => 'DSC'
]);

while ($query->have_posts()) {
    $query->the_post();
    echo the_title();
    echo "<br>";
};

wp_reset_postdata();


echo "<h1>Task3</h1>";
$query = new WP_Query([
    'post_type' => 'post',
    'orederby' => 'date',
    'order' => 'DSC'
]);

while ($query->have_posts()) {
    $query->the_post();
    echo get_the_date();
    echo "<br>";
};


echo "<h1>Task4</h1>";
$query = new WP_Query([
    'post_type' => 'post',
    'tag__in' => [11, 5],
    'posts_per_page' => 3


]);

while ($query->have_posts()) {
    $query->the_post();
    echo the_title();
    echo "<br>";
    echo the_tags();
    echo "<br>";

    echo "<br>";
};

wp_reset_postdata();

echo "<h1>Task5</h1>";
$query = new WP_Query([
    'post_type' => 'post',
    'tag__in' => [11, 5],


]);

while ($query->have_posts()) {
    $query->the_post();
    echo the_title();
    echo "<br>";
    echo the_tags();
    echo "<br>";

    echo "<br>";
};

wp_reset_postdata();

echo "<h1>Task6</h1>";
$query = new WP_Query([
    'pagename' => 'contact',

]);

while ($query->have_posts()) {
    $query->the_post();
    $user = $user = get_user_by('slug', get_the_author());
    echo 'Username is:' . ' ' . $user->user_nicename . ' ' . 'User email is:' . ' ' . $user->user_email;

};
wp_reset_postdata();


echo "<h1>Task7</h1>";
$query = new WP_Query([
    'post_type' => 'post',
    'category_name' => 'ux-design',
    'orderby' => 'title',
    'posts_per_page' => -1,
    'order' => 'ASC'
]);

while ($query->have_posts()) {
    $query->the_post();
    echo the_title();
    echo "<br>";
    echo the_content();
    echo "<br>";


};

wp_reset_postdata();
echo "<h1>Task8</h1>";
$query = new WP_Query([
    'post_type' => 'post',
    'orderby' => 'title',
    'posts_per_page' => -1,
    'order' => 'ASC'

]);

while ($query->have_posts()) {
    $query->the_post();
    $user = get_user_by('id', '1');
    echo '<ol>' . '<li>' . the_title() . '[' . $user->user_nicename . ']' . get_the_date() . '</li>' . '</ol>';
    echo "<br>";


};

wp_reset_postdata();
?>

