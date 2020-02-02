<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //ESSE IF EU FAÇO VERIFICANDO O TIPO DE PERMISSÃO DO USUÁRIO, SE ELE FOR DIFERENTE DE ADMINISTRADOR ELE NUNCA ENTRARÁ EM CLIENTE NEM PELA URL!
        if (auth()->user()->can('admin')){
            return view('clientes');
        }
        else{
            echo "<h1>Vc nao tem Permissao! Saia Agora</h1>";
        }
        
    }
}

?>