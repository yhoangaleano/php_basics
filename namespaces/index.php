<?php
require 'app/lib/session.php';
require 'app/model/userModel.php';
require 'app/routes/userRoute.php';
require 'app/providers/userModel.php';
require 'app/lib/operaciones.php';

use App\Lib\session,
    App\Model\userModel as userModel,
    App\Routes\userRoute,
    App\Providers\userModel as userProvider,
    App\Lib\operaciones;

    $session = new session();
    $userModel = new userModel();
    $userRoute = new userRoute();
    $userProvider = new userProvider();

    try{

        var_dump( operaciones::multiplicar('2', 3) );

    }catch(Exception $e){

        echo $e->getMessage().'<br>';
        echo $e->getCode().'<br>';

    }finally{
        echo 'Siempre se ejecuta';
    }

    