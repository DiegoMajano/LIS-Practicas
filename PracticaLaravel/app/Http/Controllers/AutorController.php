<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autores = Autor::all();
        return view('autores.index', compact('autores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('autores.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'codigo_autor' => ['required', 'regex:/^AUT[0-9]{3}$/'],
            'nombre_autor' => 'required|string|max:250',
            'nacionalidad' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('autores.create')
                ->withErrors($validator)
                ->withInput();
        }

        Autor::create($request->all());

        return redirect()->route('autores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Autor $autor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($codigo_autor)
    {
        $autor = Autor::findOrFail($codigo_autor);

        return view('autores.new', compact('autor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $codigo_autor)
    {
        $validator = Validator::make($request->all(), [
            'nombre_autor' => 'required|string|max:50',
            'nacionalidad' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('autores.edit', $codigo_autor)
                ->withErrors($validator)
                ->withInput();
        }

        $autor = Autor::findOrFail($codigo_autor);
        $autor->update($request->all());

        return redirect()->route('autores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($codigo_autor)
    {
        Autor::destroy($codigo_autor);

        return redirect()->route('autores.index');
    }
}
