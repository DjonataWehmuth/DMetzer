<?php

namespace App\Http\Controllers;

use App\Imagem;
use App\Servico;
use App\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function site()
    {
        $site = Site::where('ativo','S')->first();

        if (count($site) === 0)
            return "Página em manutenção";

        $servicos = Servico::where('site_id', $site->id)->get();

        return view('temas.agencia.index')->with(compact('site','site','servicos', 'servicos'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
