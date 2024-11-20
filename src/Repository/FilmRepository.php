<?php
   
namespace App\Repository; 

    class FilmRepository{

        $dsn = 'mysql:dbname=testdb;host=127.0.0.1';
        $user = '';
        $password = '';
        
        $dbh = new PDO($dsn, $user, $password);
        
    }
    
    
    



?>