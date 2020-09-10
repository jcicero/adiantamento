<?php

namespace App\Http\Controllers;

use App\Models\Adiantamentos;
use App\Models\Fornecedors;
use Illuminate\Http\Request;
use DB;

class AdiantamentoController extends Controller
{
    public function index()
    {
        $adiantamentos = Adiantamentos::orderBy('data', 'desc')->get();

        return response()->json(['adiantamento' => $adiantamentos]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $adiantamento = $request->all();

        $insert = Adiantamentos::create($adiantamento);
    }

    public function show($id)
    {
        $adiantamento = Adiantamentos::find($id);

        return response()->json($adiantamento);
    }

    public function edit($id)
    {
        $fornecedors = Fornecedors::all();
        //$danfes = Danfes::with('fornecedors')->orderBy('data', 'desc')->get();
        $danfes = DB::table('danfes')
            ->join('fornecedors', 'fornecedors.id', '=', 'danfes.fornecedor_id')
            ->select('danfes.*', 'fornecedors.*')
            ->where('danfes.adiantamento_id',$id)
            ->get();

        return response()->json($danfes);
    }

    public function update(Request $request, $id)
    {
        $dados = $request->all();
        $adiantamento = Adiantamentos::find($id);
        $update = $adiantamento->update($dados);
    }

    public function destroy($id)
    {
        $adiantamento = Adiantamentos::find($id);

        $adiantamento->delete();
    }
}
