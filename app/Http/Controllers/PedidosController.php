<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Usuario;
use Illuminate\Support\Facades\Redirect;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = pedido::all();
        return view('pedidos.index', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = producto::all('id', 'nombre', 'valor');
        $usuarios = Usuario::all();
        return view('pedidos.crear', compact('productos', 'usuarios'));
        /* return dd($usuarios, $productos); */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedidos = Pedido::create($request->all('producto_id', 'usuario_id', 'cantidad', 'valor_total'));
        return Redirect('pedidos');
        /* return dd($request->all('producto_id', 'usuario_id', 'cantidad', 'valor_total')); */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pedido = pedido::findOrFail($id);
        $productos = producto::all('id', 'nombre', 'valor');
        $usuarios = Usuario::all();
        /* return ($pedido); */
        return view('pedidos.actualizar', compact('pedido', 'productos', 'usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pedido = $request->except('_method', '_token', 'valor');
        pedido::Wherekey($id)->update($pedido);
        return Redirect('pedidos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        $pedido->delete();
        return Redirect('pedidos');
    }

    public function valorproducto($id)
    {
        $valor = Producto::where('id', [$id])->get();
        return json_encode($valor[0]);
    }
}
