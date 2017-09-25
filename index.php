<?php
/**
 * Created by PhpStorm.
 * User: blasta
 * Date: 24/09/17
 * Time: 1:46 PM
 */



 $monfichier = "biblio.txt" ;
 $fichier = file($monfichier);

          foreach ($fichier as $key => $ligne) {

              switch ($key%9){

                  case 0 :{
                      $identifiant = $fichier[$key] ;
                      break;
                  }
                  case 1 :{
                      $titre = $fichier[$key] ;
                      break;
                  }
                  case 2 :{
                      $auteurs= $fichier[$key] ;
                      break;
                  }
                  case 3 :{
                      $publication = $fichier[$key] ;
                      break;
                  }
                  case 4 :{
                      $édition = $fichier[$key] ;
                      break;
                  }
                  case 5 :{
                      $URL = $fichier[$key] ;
                      break;
                  }
                  case 6 :{
                      $image = $fichier[$key] ;
                      break;
                  }
                  case 7 :{
                      $éditionpe = $fichier[$key] ;
                      break;
                  }
                  case 8 :{
                      $délimitation = $fichier[$key] ;

                      print $identifiant . " - " .  $titre .  " - " .  $auteurs . " - " . $publication . "\n\n";
                      break;
                  }

              }



          }

?>