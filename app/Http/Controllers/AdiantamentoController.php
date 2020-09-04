<?php

namespace App\Http\Controllers;

use App\Models\Adiantamentos;
use Illuminate\Http\Request;

class AdiantamentoController extends Controller
{
    public function index()
    {
        $adiantamentos = Adiantamentos::all();

        return response()->json(['data'=> $adiantamentos]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $adiantamento = Adiantamentos::find($id);

        return response()->json($adiantamento);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
