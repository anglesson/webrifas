<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rifa;

class RifaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $rifas = Rifa::all();
        if($rifas->count() == 0) {
            $alert = warning('Não há rifas cadastradas.');
            return redirect()->route('rifa.index')->with(compact('alert'));
        }
        return view('list', compact('rifas'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $totalDeRifas = Rifa::all()->count();
        return view('index', compact('totalDeRifas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rifa = new Rifa();
        $nova = $rifa->criarRifa($request->all());
        $alert = success('Rifa cadastrada com suscesso.');
        return redirect()->route('rifa.index')->with(compact('alert'));
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
        $rifa = Rifa::findOrFail($id);
        return view('edit', compact('rifa'));
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
        $rifa = Rifa::findOrFail($id);
        $rifa->editarRifa($request->all());
        $alert = success('Dados atualizados com suscesso.');
        return redirect()->back()->with(compact('alert'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rifa = Rifa::findOrFail($id);
        $rifa->excluirRifa();
        $alert = success('A rifa foi excluída.');
        return redirect()->route('rifa.index')->with(compact('alert'));
    }
}
