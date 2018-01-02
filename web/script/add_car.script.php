<?php
/**
 * Created by PhpStorm.
 * User: krystofkosut
 * Date: 02.01.18
 * Time: 1:47
 */

if (isset($_POST['add_car'])) {

    require '../model/database.class.php';
    $mysqli = new database();

    require '../model/defaultModel.class.php';
    $auto = new defaultModel($mysqli, 'auto');

    foreach ($_POST as $key => $value) {
        $$key = $value;
    }

    $insert_klient = array(
        'spz' => $spz,
        'vin' => $vin,
        'stk' => $stk,
        'rokVyroby' => $rokVyroby,
        'znacka' => $znacka,
        'model' => $model,
        'olej' => $olej,
        'poznamka' => $poznamka,
        'm_objem' => $m_objem,
        'm_kod' => $m_kod,
        'm_vykon' => $m_vykon
    );
    $klient_id = $klient->add($insert_klient);
    if ($klient_id != FALSE) {
        header("Location: ../?p=pridat_auto");
    } else {
        # error
    }
}