<?php

namespace app\Controllers\web;

use app\Controllers\Controller;
use app\Providers\Auth;

class WellcomeController extends Controller
{
    public function index()
    {
        try {
            if (Auth::user()){
                if (Auth::user()->role){
                    redirect('parametros');
                }else{
                    return $this->json(['message' => 'Falta crear la vista web home']);
                }
            }
            return $this->view('wellcome');
        }catch (\Error $e){
            $this->showError('Error en el Controller', $e);
        }
    }

    public function master()
    {
        try {
            return $this->view('layouts.web.master');
        }catch (\Error $e){
            $this->showError('Error en el Controller', $e);
        }
    }

}