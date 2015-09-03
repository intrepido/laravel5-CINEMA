@extends('layouts.admin')

@section('content')
    <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
        <strong> Genero Actualizado Correctamente.</strong>
    </div>
    @include('genero.modal')
    <table class="table">
        <thead>
            <th>Nombre</th>
            <th>Operaciones</th>
        </thead>
        <tbody id="datos"></tbody>
    </table>
@endsection

@section('scripts')
    {!! Html::script('js/script2.js') !!} {{--Otra forma de ponerlo tambien--}}
@endsection