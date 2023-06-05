@extends('layout')

@section('acao','Alterar')
    
@section('content')
    <div class="div-form">
        <form method="POST" action="{{ route('app.update',$jogador->id) }}" enctype="multipart/form-data" class="form-fields">
        @method('PUT')
        @component('_components.form-fields',['jogador'=>$jogador]) @endcomponent    
@endsection
