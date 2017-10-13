<?php
    $content = get_the_content();
    excerpt($content);

?>


function excerpt (){
    $content = wp_strip_all_tags($content);
    $content = substr($content, 0, 180);

    echo $content;
}
