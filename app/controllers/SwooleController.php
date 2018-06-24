<?php

namespace App\Controllers;

use App\Biz\Counter;
use App\Utils\Response;

class SwooleController extends Controller
{

    public function indexAction()
    {
        // echo 1;
        \co::sleep(1);
        // sleep(1);
        return Response::success(1);
        // echo Counter::getInstance()->incr();
    }

}

