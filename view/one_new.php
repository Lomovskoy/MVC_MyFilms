<?php
/* 
 * Вывод одной новости
 * В моделе сформировать масив новостей, из контроллера отправить масив на вывод
 * переменная new прийдёт из контроллера
 */
ob_start();
    echo '<article>';
    echo '<h4> Новость #' . $one_new-> id . '</h4>';
    echo '<h3>'.$one_new->title.'</h3>';
    echo '<p>'.$one_new->description.'</p>';
    echo '<p>date: '.$one_new->date.'</p>';
    
    echo '<p style="padding-top:10px;"><a class="btn '
    . 'btn-primary" href="news" role="button">'
            . 'Назад &raquo;</a></p></article>';
    echo '<div style="clear: both;"></div>';
    
$content = ob_get_clean();

include 'view/templates/layout.php';

?>

