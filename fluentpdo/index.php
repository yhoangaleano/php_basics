<?php

require 'vendor/autoload.php';

require 'app/lib/pdo.php';
require 'app/model/jornaleroModel.php';

use App\Model\jornaleroModel;

$jm = new jornaleroModel();

$jm->createJornalero([
   'nombre' => 'Juan David Serna',
   'correoElectronico' => 'jds@gmail.com',
   'fechaNacimiento' => '1989-02-11',
   'peso' => 78
]);

var_dump($jm->readJornalero(2));

var_dump($jm->readJornaleros());

$jm->updateJornalero([
   'id' => 2,
   'nombre' => 'Sara Valentina Martinez',
   'correoElectronico' => 'sara@hotmail.com'
]);

$jm->deleteJornalero(2);