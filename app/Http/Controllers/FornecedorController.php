<?php

namespace App\Http\Controllers;

use App\Models\Fornecedors;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{

    public function index()
    {
        $fornecedors = Fornecedors::orderBy('nome', 'asc')->get();

        return response()->json($fornecedors);
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
        //
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
