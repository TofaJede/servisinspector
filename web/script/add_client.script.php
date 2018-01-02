<?php
/**
 * Created by PhpStorm.
 * User: krystofkosut
 * Date: 02.01.18
 * Time: 1:22
 */

if (isset($_POST['add_client'])) {

   // die();

  require '../model/database.class.php';
  $mysqli = new database();

  require '../model/defaultModel.class.php';
  $klient = new defaultModel($mysqli, 'klient');

  foreach ($_POST as $key => $value) {
    $$key = $value;
  }

    $insert_klient = array(
        'jmeno' => "{$jmeno}",
        'prijmeni' => "{$prijmeni}",
        'telefon' =>"{$telefon}",
        'email' => "{$email}",
        'a_ulice' => "{$a_ulice}",
        'a_mesto' => "{$a_mesto}",
        'a_psc' => "{$a_psc}"
);

  //TODO: jestli bylo prirazeni k novemu klientovy jiz existujici auto, zapsat do DB

$klient_id = $klient->add($insert_klient);
if ($klient_id != FALSE) {
  header("Location: ../?p=pridat_klienta");
} else {
  # error
}


}
