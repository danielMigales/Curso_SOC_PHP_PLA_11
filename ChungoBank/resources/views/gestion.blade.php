@extends('layout')
@section('titulo')
{{$titulo}}
@endsection
@section('contenido')
<form>
    <label>Nº Ident. Fiscal</label><br>
    <input type="text" id="nif" required value=''>
    <input type="text" id='nombre' readonly value=''>
    <span id='mensajes'>Zona de mensajes</span>
    <br><br>
</form>
@endsection