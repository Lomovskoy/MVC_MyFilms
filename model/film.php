<?php
    class Film
    {
        public $title;
        public $text;
        public $image;

        public function __construct($title,$text,$image) 
        {
            $this->title=$title;
            $this->text=$text;
            $this->image=$image;

        }
    }
?>
