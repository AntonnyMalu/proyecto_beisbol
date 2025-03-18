<?php

namespace app\Controllers\dashboard;

use app\Controllers\Controller;

class BeisbolController extends Controller
{

    public function index(){
        return $this->view('beisbol.view');
    }

}