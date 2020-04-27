<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = producto::all();

        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('productos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('imagen')) {
            //convierte el archivo para guardarlo en la carpeta publica
            $file = $request->file('imagen');
            $nombre = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/img/', $nombre);
        }
        $producto = producto::create($request->all());
        $producto->imagen = $nombre;
        $producto->save();
        /*  return dd($request); */
        return Redirect('productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.actualizar', compact('producto'));
        /* return $producto; */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $producto->fill($request->except('imagen'));
        if ($request->hasFile('imagen')) {
            //convierte el archivo para guardarlo en la carpeta publica
            $file = $request->file('imagen');
            $nombre = time() . $file->getClientOriginalName();
            $producto->imagen = $nombre;
            $file->move(public_path() . '/img/', $nombre);
        }
        $producto->save();
        /* return dd($request); */
        return Redirect('productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $imagen = public_path() . '/img/' . $producto->imagen;
        unlink($imagen);
        $producto->delete();
        return Redirect('productos');
    }
}
