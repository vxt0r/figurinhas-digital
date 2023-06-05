<?php

namespace App\Http\Controllers;

use App\Models\Jogador;
use Illuminate\Http\Request;

class JogadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jogadores = Jogador::all();
        return view('index',['jogadores'=>$jogadores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image_name = '';
        
        if($request->hasFile('foto') && $request->file('foto')->isValid()){
            $file_name = $_FILES['foto']['name'];
            $extension = pathinfo($file_name,PATHINFO_EXTENSION);
            $image_name = uniqid().'.'.$extension;
            $request->foto->move(public_path('uploads'),$image_name);
        }
        
        $request->validate(['nome' => 'required|unique:jogadores'],
        [
            'required' => 'Campo obrigatório',
            'unique' => 'O jogador já foi inserido no álbum'
        ]);

        Jogador::create([
            'nome'=> $request->nome,
            'time'=> $request->time,
            'posicao'=> $request->posicao,
            'altura'=> $request->altura,
            'foto'=> $image_name
        ]);

        return redirect()->route('app.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jogador = Jogador::find($id);
        return view('show',['jogador'=>$jogador]);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jogador = Jogador::find($id);
        return view('edit',['jogador'=>$jogador]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jogador = Jogador::find($id);
        $jogador->update($request->all());
        return redirect()->route('app.show',$jogador);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jogador = Jogador::find($id);
        $file = "uploads/$jogador->foto";
        if(file_exists($file)){
            unlink($file);
        }

        $jogador->delete();
        return redirect()->route('app.index');
    }
}
