<?php
    ob_start();
    
    foreach ($news_film_view as $film)
    {
        echo '<article><h3><a href="film?id='.$film->title.'">'.$film->title.'</a></h3>';
        echo'<img src="public/images/'.$film->image.'">';
        echo '<p><strong>Год</strong>: '.$film->year.'</p>';
        echo '<p><strong>Страна</strong>: '.$film->country.'</p>';
        echo '<p><strong>Директор</strong>: '.$film->director.'</p>';
        echo '<p><strong>Актёры</strong>: '.$film->actors.'</p>';
        echo '<p><strong>О фильме</strong>: '.$film->content.'</p></article>';
        echo '<div style="clear:both;"></div>';
    }
    //$film->titles="";
    
    echo '</article>';
    $content= ob_get_clean();
    include 'view/templates/layout.php'; 
?>
