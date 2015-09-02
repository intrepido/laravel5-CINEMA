@extends('layouts.admin')

@section('content')
    <?php echo Session::getId();  ?>
    @include('alerts.request')
    {!! Form::open(['route' => 'usuario.store', 'method' => 'POST']) !!}
    @include('usuario.forms.user')
    {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}

@stop