<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Libros;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Support\Facades\Storage;

class LibroController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libros::all();

        return view('Libros.index')->with('libros', $libros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Category::all();
        return view('Libros.create')->with('categorias',$categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $libros = $request->all();

        $file = $request->file('foto');
        $file->move('upload/libros', $file->getClientOriginalName());


        $libros = new Libros();
        $libros->nombre = $request->get('nombre');
        $libros->autor = $request->get('autor');
        $libros->status = $request->get('status');
        $libros->categories_id = $request->get('categories_id');
        $libros->fecha_publicacion = $request->get('fecha_publicacion');
        $libros->foto = $file->getClientOriginalName();

        $libros->save();

        return redirect('/Libros');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias = Category::all();
        $libros = Libros::find($id);
        return view('Libros.edit',[
            'libros'        => $libros,
            'categorias'    => $categorias,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $libros = Libros::find($id);

        $libros->nombre =  $request->get('nombre');
        $libros->autor =  $request->get('autor');
        $libros->status = $request->get('status');
        $libros->categories_id = $request->get('categories_id');
        $libros->fecha_publicacion = $request->get('fecha_publicacion');
        $libros->foto =  $request->get('foto');

        $libros->save();

        return redirect('/Libros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $libros = Libros::find($id);
        $libros->delete();

        return redirect('/Libros');
    }
}
