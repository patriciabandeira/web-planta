<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Planta;
use App\Bioma;
use App\Http\Requests\PlantaRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use App\Estado;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Imagem;

class PlantaController extends Controller
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
	
    /**
     * Mostra a listagem de Plantas cadastradas.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $plantas =  Planta::paginate(10);
        return view('admin.planta.index', compact('plantas'));
    }
	
	public function findById($id)
    {
        $planta = Planta::where('id', '=', $id)->with(['biomas', 'dist_geografica','imagens'])->first();
        print_r($planta->id);
        exit;
        if(isset($planta->id)){
            return response()->json($planta[0], 200, array('Content-Type' => 'application/json; charset=utf-8'), JSON_UNESCAPED_UNICODE);
        }else{
            return redirect()->route('planta.index.get')->with('erro', 'Planta Inválida!');
        }
        
    }

    public function addGet()
    {
        $biomas = Bioma::all();
        $estados = Estado::all();
        $lista_iucn = Planta::lista_iucn();
        $lista_meses = Planta::lista_meses();
        return view('admin.planta.add', compact('biomas', 'lista_iucn', 'lista_meses', 'estados'));
    }

    public function viewGet($id)
    {
        $planta = Planta::where('id', '=', $id)->with(['biomas', 'dist_geografica', 'imagens'])->first();
        //print_r($planta);
        //exit;
        if(isset($planta['id'])){
            $biomas = Bioma::all();
            $estados = Estado::all();
            $lista_iucn = Planta::lista_iucn();
            $lista_meses = Planta::lista_meses();
            return view('admin.planta.view', compact('planta', 'biomas', 'estados', 'lista_iucn', 'lista_meses'));
        }else{
            return redirect()->route('planta.index.get')->with('erro', 'Planta Inválida!');
        }
        
    }

    public function addPost(PlantaRequest $request)
    {
        $sucesso = false;
        DB::beginTransaction();
        try {
            $planta = Planta::create($request->only([
                'nome_cientifico', 'nome_popular', 'autoria',
                'e_panc', 'ep_floracao_inicio', 'ep_floracao_fim',
                'grau_ameaca_iucn', 'descricao'
            ]));
            if ($planta->id) {
                $bioma_ids = $request->input('biomas');
                $planta->biomas()->sync($bioma_ids);
                $estado_ids = $request->input('dist_geografica');
                $planta->dist_geografica()->sync($estado_ids);
                $imagens = $request->input('imagens');
                foreach ($imagens as $imagem) {
                    $imagem['planta_id'] = $planta->id;
                    $planta->imagens()->save(new Imagem($imagem));
                }                
                $sucesso = true;
            }
        } catch (\Exception $e) {

        }
        if ($sucesso) {
            DB::commit();
            return redirect()->route('planta.index.get')->with('sucesso', 'Planta Cadastrada com Sucesso!');
        } else {
            DB::rollback();
            return Redirect::back()->with('erro','Erro ao Cadastrar Planta!');
        }
    }

    public function delete($id)
    {
        Planta::destroy($id);
        return redirect()->route('planta.index.get')->with('sucesso', 'Planta Excluída com Sucesso!');
    }

    public function plantaFullGet($id)
    {
        $imagens = Planta::where('id', '=', $id)->with(['biomas', 'dist_geografica','imagens'])->get()->toArray();
        return response()->json($imagens, 200, array('Content-Type' => 'application/json; charset=utf-8'), JSON_UNESCAPED_UNICODE);
    }

    public function imagensGet($id)
    {
        $imagens = Planta::where('id', '=', $id)->with(['biomas', 'dist_geografica','imagens'])->get()->toArray();
        return response()->json($imagens, 200, array('Content-Type' => 'application/json; charset=utf-8'), JSON_UNESCAPED_UNICODE);
    }

    
}