<?php
    //Проверка URL адреса и перенаправление в соответсвующую ф-ю контроллера
    //start site, news, contakt, error
    $host = explode('?',$_SERVER['REQUEST_URI'])[0];
    // Посчитаем "/", то есть сколько у нас вложений или папокот корня
    $num = substr_count($host, '/');
    $uri = explode('/',$host)[$num];
    if($uri == '' || $uri == 'index.php')
    {
        $controller = new Controller();
        $response = $controller->start_site();
    }
    elseif ($uri == 'contact') {
        $controller = new Controller();
        $response = $controller->contact_view();
        //Функция в котроллере загрузка файла контакт
        
    }
    elseif ($uri == 'news' && !isset($_GET['id'])) {
        $controller = new Controller();
        $response = $controller->news_list();
        //Функция в котроллере загрузка файла новость
        
    }
    elseif ($uri == 'news' && isset($_GET['id'])) {
        $controller = new Controller();
        $response = $controller->one_new($_GET['id']);
        //Функция в котроллере загрузка файла новость
        
    }  
    elseif ($uri == 'news_film') {
        $controller = new Controller();
        $response = $controller->new_film();
        //Функция в котроллере загрузка файла новость
        
    }  
    else 
    {
        $controller = new Controller();
        $response = $controller->error_404();
    }
    //............продолжение
?>

