<?php

class Model {

    //подготовка вывода всего списка
    public function getFilmList() {
        include_once 'model/films_array.php';
        $films_object = array();
        //переписать массив, как объекты класса 
        foreach ($films as $item) {
            $row = new Film
                    (
                    $item['title'], $item['text'], $item['image']
            );

            $films_object[] = $row;
        }
        return $films_object;
    }
//--------показать лист новостецй
    public function getNewList() {
        include_once 'model/news_array.php';
        $news_object = array();
        //переписать массив, как объекты класса 
        foreach ($news as $item) {
            $row = new News
                    (
                    $item['id'], $item['title'], $item['description'], $item['date']
            );

            $news_object[] = $row;
        }
        //print_r($news_object);
        return $news_object;
    }
//-------Покащать одну новость
    public function getNew($News_id) {
        $allNews = $this->getNewList();
        $i = 0;
        foreach ($allNews as $one_new) {
            if ($one_new->id == $News_id) {
                return($allNews[$i]);
            }
            $i++;
        }
    }
    //-------Покащать новые фиьмы
    public function getNewFilm(){
        include_once 'model/new_film_array.php';
        $news_film_object = array();
        //переписать массив, как объекты класса newfilms имя массива 
        foreach ($newfilms as $item) {
            $row = new new_film(
            $item['title_film'], $item['year'], $item['country'], $item['director'], $item['actors'], $item['content'], $item['image_film']
                    //названия из массива
            );

            $news_film_object[] = $row;
        }
        //print_r($news_object);
        return $news_film_object;
    }
}

?>