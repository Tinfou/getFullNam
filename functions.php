<?php 

    declare(strict_types=1);

    function getFullName(String $nom, ?string $prenom): string
        {   
            if(validationChar($nom) && validationChar($prenom)){
                $nom = mb_strtoupper($nom);
                $prenom = ucfirst($prenom);
                return "votre nom complet est: $nom $prenom"; 
            }
            else if(!$prenom && validationChar(($nom))){
                $nom = mb_strtoupper($nom);
                return "votre nom est: $nom";
            }
            
            return "Information incorrectes";
        }
    function validationChar($var): bool
        {   
            
            if($var && preg_match('/^[A-Za-zÀ-ÿ]+(?: [A-Za-zÀ-ÿ]+)*$/', $var)){
                return true;
            }
            else{
                return false;
            }
        }
?>