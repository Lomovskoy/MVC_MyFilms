
<?php

//Дочерний класс от класса
class Controller extends RenderTemplate {

    public $model;

    public function __construct() {
        $this->model = new Model();
    }

    //запускает проект
    public function start_site() {
        //экземпляры film для вывода на страницу
        //film list хранит массив экзмепляра класса book
        if (!isset($_GET['film'])) {
            //$ffilm_list - хранит массив

            $film_list = $this->model->getFilmList();

            //делаем вывод на страницу
            include 'view/films_list.php';
        } else if (isset($_GET['film'])) {
            $films = $this->model->getFilm($_GET['film']);
            //делаем вывод на страницу 
            //include 'view/viewfilm.php';
            $file = $this->render_template('view/film_list.php', array('film_list' => $film_list));
            //'film_list' => из документа film_list.php - переменная film_list
            return $file;
        }
    }

    public function contact_view() {
        $file = $this->render_template('view/contact.php', array());
        //'contact' => из документа contact.php 
        return $file;
    }

    public function error_404() {
        $file = $this->render_template('view/error_404.php', array());
        return $file;
    }

    public function news_list() {
        $news_list = $this->model->getNewList();

        //делаем вывод на страницу идентификатор news, прописан в ссылках layout.php
        $file = $this->render_template('view/news_list.php', array('news_list' => $news_list));
        return $file;
    }

    public function one_new($News_id) {
        $one_new = $this->model->getNew($_GET["id"]);
        //делаем вывод на страницу 
        $file = $this->render_template('view/one_new.php', array('one_new' => $one_new));
        return $file;
    }
    public function new_film() {
        $news_film_list = $this->model->getNewFilm();

        //делаем вывод на страницу идентификатор news, прописан в ссылках layout.php
        $file = $this->render_template('view/new_film_view.php', array('news_film_view' => $news_film_list));
        return $file;
    }
}

?>