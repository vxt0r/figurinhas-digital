@extends('layout')

@section('content')
    <main class="main-show">
        <div class="card-show">
            <div class="info">
                <img src="/uploads/{{$jogador->foto}}" class="foto-jogador">
                <ul class="lista-info">
                    <li>{{$jogador->nome}}</li>
                    <li>{{$jogador->time}}</li>
                    <li>{{$jogador->posicao}}</li>
                    <li>{{$jogador->altura}} m</li>
                </ul>
            </div>
            <div class="actions actions-show">
                <a href="{{ route('app.edit',$jogador->id)}}" class="card-button">Editar</a>
                <form method="POST" action="{{ route('app.destroy',$jogador->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="card-button" id="card-button">Excluir</button>
                </form>
            </div>
        </div>
        
        <div class="div-link">
            <a href="{{ route('app.index')}}">Voltar</a>
        </div>
    </main>
@endsection

