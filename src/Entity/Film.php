<?php

namespace App\Film;

    class Film{
        
        private int $id;	
        private string $title;	
        private ?int $year = null;
        private string $genre;	
        private string $synopsis;	
        private string $director;	
        private ?\DateTime $deleted_at = null;
        private \DateTime $created_at;
        private ?\DateTime $updated_at = null;

        




    }
?>