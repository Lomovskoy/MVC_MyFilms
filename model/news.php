<?php
    class News
    {
        public $id;
        public $title;
        public $description;
        public $date;

        public function __construct($id,$title,$description,$date) 
        {
            $this->id=$id;
            $this->title=$title;
            $this->description=$description;
            $this->date=$date;

        }
    }
?>
