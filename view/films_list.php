<?php ob_start(); ?>

<?php
    foreach ($film_list as $film_row)
    {
        echo '<article><h3><a href="film?id='.$film_row->title.'">'.$film_row->title.'</a></h3>';
        echo'<img src="public/images/'.$film_row->image.'">';
        echo '<p><strong>Содержание</strong>: '.$film_row->text.'</p>' . '</article>';
        echo '<div style="clear:both;"></div>';
    }
    $film_row->titles="";
?>

<?php 
    echo '</article>';
    $content= ob_get_clean();
    include 'view/templates/layout.php'; 
?>

