<?php ob_start(); ?>

<?php
    foreach ($news_list as $news_row)
    {
        echo '<article><h3><a href="news?id='.$news_row->id.'">'.$news_row->title.'</a></h3>';
        echo '<p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
			 <b>Содержание:</b> '.$news_row->description.'</p>';
        echo '<p>'.$news_row->date.'</p>';
        echo '<p style="padding-top:10px;"><a class="btn '
        . 'btn-primary" href="news?id='.$news_row->id.'" role="button">'
            . 'Подробнее &raquo;</a></p></article>';
        echo '<div style="clear:both;"></div>';
        
    }
    $news_row->title="";
?>

<?php 
    echo '</article>';
    $content= ob_get_clean();
    include 'view/templates/layout.php'; 
?>