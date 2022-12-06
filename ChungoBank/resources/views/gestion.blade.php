@extends('layout')
@section('titulo')
{{$titulo}}
@endsection
@section('contenido')
<form method='get' action='{{url("personas/")}}'>
    <label>Nº Ident. Fiscal</label><br>
    <input type="text" id="nif" required value="{{$persona->nif ?? null}}" onblur='this.form.submit()'>
    <input type="text" id='nombre' readonly value="{{$persona->nombre ?? null}}{{$persona->apellidos ?? null}}">
    <span id='mensajes'>Zona de mensajes</span>
    <br><br>
    @if($errors->has('nif'))
    <span id='mensajes'>{{$errors-first('nif')}}</span>
    @endif
</form>
@endsection

<script type_"text/javascript">
    function enviar() {
        let nif = document.querySelector('#nif').value
        window.location.href = "{{url('personas/')}}" + '/' + nif
    }
</script>