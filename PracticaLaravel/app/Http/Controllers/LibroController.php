<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Autor;
use App\Models\Editorial;
use App\Models\Genero;
use Illuminate\Support\Facades\Validator;

class LibroController extends Controller
{
    public function __construct()
    {
        // Aplica auth excepto para index
        //$this->middleware('auth')->except(['index']);
    }

    public function index()
    {
        $libros = Libro::with(['autor', 'editorial', 'genero'])->orderBy('codigo_libro')->get();

        return view('libros.index', compact('libros'));
    }

    public function create()
    {
        $autores = Autor::all();
        $editoriales = Editorial::all();
        $generos = Genero::all();

        return view('libros.new', compact('autores', 'editoriales', 'generos'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'codigo_libro' => ['required', 'regex:/^LIB[0-9]{6}$/'],
            'nombre_libro' => ['required', 'string'],
            'existencias' => ['required', 'integer', 'min:0'],
            'precio' => ['required', 'numeric', 'min:0'],
            'codigo_autor' => ['required', 'exists:autores,codigo_autor'],
            'codigo_editorial' => ['required', 'exists:editoriales,codigo_editorial'],
            'id_genero' => ['required', 'exists:generos,id_genero'],
            'descripcion' => ['nullable', 'string'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        Libro::create($request->all());

        return redirect()->route('libros.index')->with('success', 'Libro creado exitosamente.');
    }

    public function edit($codigo_libro)
    {
        $libro = Libro::findOrFail($codigo_libro);
        $autores = Autor::all();
        $editoriales = Editorial::all();
        $generos = Genero::all();

        return view('libros.new', compact('libro', 'autores', 'editoriales', 'generos'));
    }

    public function update(Request $request, $codigo_libro)
    {
        $validator = Validator::make($request->all(), [
            'codigo_libro' => ['required', 'regex:/^LIB[0-9]{6}$/'],
            'nombre_libro' => ['required', 'string'],
            'existencias' => ['required', 'integer', 'min:0'],
            'precio' => ['required', 'numeric', 'min:0'],
            'codigo_autor' => ['required', 'exists:autores,codigo_autor'],
            'codigo_editorial' => ['required', 'exists:editoriales,codigo_editorial'],
            'id_genero' => ['required', 'exists:generos,id_genero'],
            'descripcion' => ['nullable', 'string']
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $libro = Libro::findOrFail($codigo_libro);
        $libro->update($request->all());

        return redirect()->route('libros.index')->with('success', 'Libro actualizado correctamente.');
    }

    public function destroy($codigo_libro)
    {
        $libro = Libro::findOrFail($codigo_libro);
        $libro->delete();

        return redirect()->route('libros.index')->with('success', 'Libro eliminado correctamente.');
    }
}
