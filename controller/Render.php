<?php
    class RenderTemplate
    {
        //Если есть массив разбирает его по значениям
        //Обработка пути из адресной строки и создание перехода по названию.
        function render_template($path, array $args)
        {
            extract($args);		
            ob_start();
            include $path;
            $html = ob_get_clean();
            return $html;
        }
    }
?>