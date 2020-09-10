<?php

namespace App\Http\Controllers;

use App\Models\Danfes;
use App\Models\Fornecedors;
use Illuminate\Http\Request;
use DB;

class DanfeController extends Controller
{

    public function index()
    {
        $fornecedors = Fornecedors::all();
        //$danfes = Danfes::with('fornecedors')->orderBy('data', 'desc')->get();
        $danfes = DB::table('danfes')
            ->join('fornecedors', 'fornecedors.id', '=', 'danfes.fornecedor_id')
            ->select('danfes.*', 'fornecedors.*')
            ->get();

        //dd($danfes);
        return response()->json($danfes);

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $danfe = $request->all();

        $insert = Danfes::create($danfe);
    }

    public function show($id)
    {
        $danfe = Danfes::find($id);

        return response()->json($danfe);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $dados = $request->all();
        $danfe = Danfes::find($id);
        $update = $danfe->update($dados);
    }

    public function destroy($id)
    {
        $danfe = Danfes::find($id);

        $adiandanfetamento->delete();
    }
}
