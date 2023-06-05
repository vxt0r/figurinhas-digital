@extends('layout')

@section('content')
    <header>
        <h2>Monte seu álbum com seus jogadores favoritos</h2>
        <a href="{{ route('app.create')}}">Adicionar</a>
    </header>
    <main>
        @foreach ($jogadores as $jogador)
            <div class="card">
                <h4>{{$jogador->nome}}</h4>
                <img src="/uploads/{{$jogador->foto}}" class="foto-jogador">

                <div class="actions">
                    <a href="{{ route('app.show',$jogador->id)}}" class="card-button">Visualizar...</a><br>
                    <a href="{{ route('app.edit',$jogador->id)}}" class="card-button">Editar</a>
                    <form method="POST" action="{{ route('app.destroy',$jogador->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="card-button" id="card-button">Excluir</button>
                    </form>
                </div>
            </div>
            
        </div>
        @endforeach
    </main>
@endsection