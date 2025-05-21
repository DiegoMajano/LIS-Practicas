<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editorial;
use Illuminate\Support\Facades\Validator;

class EditorialController extends Controller
{
    public function __construct()
    {
        // Middleware de autenticación
        //$this->middleware('auth');
    }

    public function index()
    {
        $editoriales = Editorial::all();
        return view('editoriales.index', compact('editoriales'));
    }

    public function create()
    {
        return view('editoriales.new');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'codigo_editorial' => ['required', 'regex:/^EDI\d{3}$/'],
            'nombre_editorial' => 'required|string',
            'contacto' => 'required|string',
            'telefono' => ['required', 'regex:/^\d{8,15}$/'],
        ], [
            'codigo_editorial.regex' => 'El código editorial debe seguir formato EDIxxx.',
            'nombre_editorial.required' => 'El nombre de la editorial no puede estar vacío.',
            'contacto.required' => 'El contacto no es válido.',
            'telefono.regex' => 'El teléfono no es válido.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        Editorial::create($request->all());
        return redirect()->route('editoriales.index');
    }

    public function edit($codigo_editorial)
    {
        $editorial = Editorial::findOrFail($codigo_editorial);
        return view('editoriales.edit', compact('editorial'));
    }

    public function update(Request $request, $codigo_editorial)
    {
        $editorial = Editorial::findOrFail($codigo_editorial);

        $validator = Validator::make($request->all(), [
            'codigo_editorial' => ['required', 'regex:/^EDI\d{3}$/'],
            'nombre_editorial' => 'required|string',
            'contacto' => 'required|string',
            'telefono' => ['required', 'regex:/^\d{8,15}$/'],
        ], [
            'codigo_editorial.regex' => 'El código editorial debe seguir formato EDIxxx.',
            'nombre_editorial.required' => 'El nombre de la editorial no puede estar vacío.',
            'contacto.required' => 'El contacto no es válido.',
            'telefono.regex' => 'El teléfono no es válido.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $editorial->update($request->all());
        return redirect()->route('editoriales.index');
    }

    public function destroy($codigo_editorial)
    {
        $editorial = Editorial::findOrFail($codigo_editorial);
        $editorial->delete();
        return redirect()->route('editoriales.index');
    }
}
