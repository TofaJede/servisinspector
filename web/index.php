<?php
// Setting up variables
if (isset($_GET)){
    foreach ($_GET as $key => $value) {
        $$key = $value;
    }
}
// Including base classes
require 'model/database.class.php';
require 'model/defaultModel.class.php';
// Connecting to database
$mysqli = new database();

    if(!isset($_GET['p'])){
        $stranka = "uvod";
    } 
    else{
        $stranka = $_GET['p'];
    }

  require "pages/head.php";
  if($stranka !== "login"){
    require "pages/nav.php";
  }
 

  switch ($stranka) {
      case 'uvod':
            require "pages/uvod.php";
          break;

      case 'login':
            require "pages/login.php";
          break;

      case 'pridat_klienta':
            require "pages/add_client.php"; // formular pro pridani klientu
          break;

      case 'pridat_auto':
            require "pages/add_car.php"; // formular pro pridani auta do databáze
          break;

      case 'prehled_aut':
            require "pages/vypis_aut.php"; // vypis v tabulce -> všechny auta v tabulce
          break;

       case 'prehled_klientu':
            require "pages/vypis_klientu.php"; //  vypis v tabulce -> všechny klienty v tabulce
          break;

      case 'nahled_klienta':
            require "pages/nahled_klienta.php"; //  vypis informací o klientovi
          break;

      case 'nahled_auta':
            require "pages/nahled_auta.php"; //  vypis informací o autě
          break;

      default:
           require "pages/uvod.php";
          break;
  }

  require "pages/footer.php";
?>
    
