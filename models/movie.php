<?php
    // creo la classe Movie
    class Movie {
        // variabili della classe
        public $title;
        public $genre;
        public $year;

        public $duration;
        public $actors = [];

        function __construct($_title, $_genre){
            $this->title =$_title;
            $this->genre =$_genre;
        }

        public function addActor($_actor){
            if ( !in_array($_actor, $this->actors) ){
                $this->actors[] = $_actor;
            }       
        }

    }

?>