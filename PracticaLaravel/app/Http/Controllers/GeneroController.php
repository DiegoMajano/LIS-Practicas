<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;
use Illuminate\Support\Facades\Validator;

class GeneroController extends Controller
{
    public function __construct()
    {
        // Middleware para proteger rutas
        //$this->middleware('auth')->except(['index']);
    }

    public function index()
    {
        $generos = Genero::all();
        return view('generos.index', compact('generos'));
    }

    public function create()
    {
        return view('generos.new');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre_genero' => ['required', 'string'],
            'descripcion' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        Genero::create($request->all());

        return redirect()->route('generos.index')
            ->with('success', 'Género creado exitosamente.');
    }

    public function edit($id_genero)
    {
        $genero = Genero::findOrFail($id_genero);
        return view('generos.new', compact('genero'));
    }

    public function update(Request $request, $id_genero)
    {
        $validator = Validator::make($request->all(), [
            'nombre_genero' => ['required', 'string'],
            'descripcion' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $genero = Genero::findOrFail($id_genero);
        $genero->update($request->all());

        return redirect()->route('generos.index')
            ->with('success', 'Género actualizado correctamente.');
    }

    public function destroy($id_genero)
    {
        $genero = Genero::findOrFail($id_genero);
        $genero->delete();

        return redirect()->route('generos.index')
            ->with('success', 'Género eliminado correctamente.');
    }
}
