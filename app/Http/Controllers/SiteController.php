<?php

namespace App\Http\Controllers;

use App\Servico;
use App\Site;
use Validator;
use Illuminate\Http\Request;

class SiteController extends Controller
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
        $sites = Site::all();
        return view('site.site.index')->with(compact('sites', 'sites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.site.novo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'nome' => 'required|max:255',
            'imagem' => 'required',
            'sigla' => 'required',
            'descricao' => 'required|max:255',
            'rua' => 'required',
            'email' => 'required|email',
        ])->validate();

        $dados = $request->all();
        Site::create($dados);

        return redirect()->route('sites');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $site = Site::find($id);
        $readonly = '';

        if ($site->ativo === 'S')
            $readonly = 'readonly';

        return view('site.site.consultar')->with(compact('site', 'site','readonly','readonly'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function edit(Site $site)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $dados = $request->all();
        $site = Site::find($dados['id']);
        $site->fill($dados)->save();
        return redirect()->route('site', ['id' => $site->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function destroy(Site $site)
    {
        //
    }

    /**
     * Active the specified resource from storage.
     *
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function active(Request $request)
    {
        $ativos = Site::where('ativo','S')->get();

        if (count($ativos) > 0)
            return redirect()->back()->with('status', 'Você já possui um site ativo!');

        $dados = $request->all();
        $site = Site::find($dados['id']);
        $site->ativo = 'S';
        $site->save();

        return redirect()->route('site', ['id' => $site->id]);
    }

    public function toEdit(Request $request)
    {
        $dados = $request->all();
        $site = Site::find($dados['id']);
        $site->ativo = 'N';
        $site->save();

        return redirect()->route('site', ['id' => $site->id]);
    }
}
