@extends('layout')

@section('acao','Cadastrar')

@section('content')
    <div class="div-form">
        <form method="POST" action="{{ route('app.store') }}" enctype="multipart/form-data" class="form-fields">
        @component('_components.form-fields') @endcomponent    
@endsection
