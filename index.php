<?php

    class Movie {
        public $title;
        public $genre;
        public $duration;
        public $director;

    

        function __construct($_title, $_genre, $_duration, $_director)
        {
            $this->title = $_title;
            $this->genre = $_genre;
            $this->duration = $_duration;
            $this->director = $_director;

            
        }

        public function getTitle() {
            return $this->title;
        }
        public function getGenre() {
            return $this->genre;
        }
        public function getDuration() {
            return $this->duration;
        }
        public function getDirector() {
            return $this->director;
        }

    }


    $newMovie = new Movie("L'esorcista", "Horror", "230min", "Francis Ford Coppola");
    // var_dump($newMovie);

    $newMovie2 = new Movie("Il Padrino", "Gangster", "210min", "Francis Ford Coppola");

    // $newMovie = new Movie("Dora l'esploradora", );

    // $newMovie = new Movie("Alla ricerca di Nemo");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    <main>
        <h1><?php echo $newMovie->getTitle() ?> </h1>
        <ul class="main-container">
            <li class="main-container"><?php echo $newMovie->getGenre() ?> </li>
            <li class="main-container"><?php echo $newMovie->getDuration() ?> </li>
            <li class="main-container"><?php echo $newMovie->getDirector() ?> </li>
        </ul>

        <h1><?php echo $newMovie2->getTitle() ?> </h1>
        <ul class="main-container">
            <li class="main-container"><?php echo $newMovie2->getGenre() ?> </li>
            <li class="main-container"><?php echo $newMovie2->getDuration() ?> </li>
            <li class="main-container"><?php echo $newMovie2->getDirector() ?> </li>
        </ul>

    </main>
</body>
</html>