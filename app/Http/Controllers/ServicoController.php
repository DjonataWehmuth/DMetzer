<?php

namespace App\Http\Controllers;

use App\Servico;
use App\Site;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected $redirectTo = '/home';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicos = Servico::all();
        return view('site.servicos.index')->with(compact('servicos', 'servicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sites = Site::all();
        return view('site.servicos.novo')->with(compact('sites', 'sites'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        Servico::create($dados);

        return redirect()->route('servicos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function show(Int $id)
    {
        $servico = Servico::find($id);
        $sites = Site::all();
        return view('site.servicos.consultar')->with(compact('servico', 'servico', 'sites', 'sites'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function edit(Servico $servico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servico $servico)
    {
        $dados = $request->all();
        $servico = Servico::find($dados['id']);
        $servico->fill($dados)->save();

        return redirect()->route('servico',['id' => $servico->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Servico::destroy($request['id']);

        return redirect()->route('servicos');
    }
}
