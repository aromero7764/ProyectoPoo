<?php

//object-interaction

        //creando una clase Sonido, una cancion
    class Song
    
    {

        //creando propiedades publicas, sonido y titulo
        public $songId;
        public $title;

    }

    //creando un objeto llamado Song con su primera cancion
    $octopusSong = new Song();
        $octopusSong->songId = 1;
        $octopusSong->title = "Octopu's Garden";

        //var_dump($octopusSong);

        //Creando un Playlist
        class Playlist {
            public $name;
            //Song sera una matriz de varios sonidos
            public $songs = [];

            //con esta funcion agregamos una cancion a mi playlist
            public function addSong($songs) {
                
                $this->songs[] = $songs;



            }


        }

        $yellowSubmarine = new Song();
        $yellowSubmarine->songId = 2;
        $yellowSubmarine->title = "Yellow Submarine";


        $playlist = new Playlist();
        $playlist->name = 'Rock';
        $playlist->addSong($octopusSong);
        $playlist->addSong($yellowSubmarine);



        var_dump($playlist->songs);

?>