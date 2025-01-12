<?php
 
class MyFct{
    
    function generatePage($file,$variables=[],$base="View/base-bs.html.php"){  // generation d'une page
        // $file  : fichier html
        //$variables  : une variable en tableau qui contnient comme indices les noms des variables utilisées par $file
        //Exemple ['x'=>2,'y'=>5,'z'=>10]   . avec extract($variables) , on a $x=2;  $y=5 et $z=10
        if(file_exists($file)){   // if faut verifier si le $file existe ou non
            //cas de $file existe
            extract($variables);
            ob_start();   // Ouvrir   la memoire tampon pour contenir lfichier $file à transformer en texte
            require($file);
            $content=ob_get_clean();
            //------------
            //---Ouvrir à nouveau la memoire tampon pour recevoir le fichier $base avec la variable $content
    
            ob_start();
            require($base);
            $page=ob_get_clean();
            echo $page;
    
        }else{
    
            // cas où le fichier $file n'existe pas
            echo "<h1>Desolé! Le fichier $file n'existe pas!</h1>"; 
            die;
        }
    
    }
    
    function printr($tableau){
        echo "<pre>";
        print_r($tableau);
        echo "</pre>";
    
    }
    static function sprintr($tableau){
        echo "<pre>";
        print_r($tableau);
        echo "</pre>";
    
    }





}

