<?php

namespace App\Controller;

class FilmController
{

    public function list(array $queryParams){
        
        $filmsEntities[] = new film();

        foreach($films as $film){
            
            $filmEntity->setId($film["id"]):
            $filmEntity->setTitle($film["title"]):
            $filmEntity->setYear($film["year"]):
            $filmEntity->setType($film["type"]):
            $filmEntity->setSynopsis($film["synopsis"]):
            $filmEntity->setDirector(new \DateTime($film["director"])):
            $filmEntity->setCreatedAt(new \DateTime($film["created_at"])):
    
            $filmsEntities[] = $filmEntity;
        }
    }




    public function create()
    {
        echo "Création d'un film";
    }

    public function read()
    {
        echo "Lecture d'un film";
    }

    public function update()
    {
        echo "Modification d'un film";
    }

    public function delete()
    {
        echo "Suppression d'un film";
    }
}