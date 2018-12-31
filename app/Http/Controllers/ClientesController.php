<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function getClientes(){
    	return app('user')->getClientes;
    }
}
