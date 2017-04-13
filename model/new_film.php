<?php
    class new_film
    {
        public $title;
        public $year;
        public $country;
        public $director;
        public $actors;
        public $content;
        public $image;

        public function __construct($title_film,$year,$country,$director,$actors,$content,$image_film) 
        {
            $this->title=$title_film;
            $this->year=$year;
            $this->country=$country;
            $this->director=$director;
            $this->actors=$actors;
            $this->content=$content;
            $this->image=$image_film;
        }
    }
?>
