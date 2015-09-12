<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Ingresa el nombre del usuario']) !!}
</div>
<div class="form-group">
    {!! Form::label('correo', 'Correo:') !!}
    {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Ingresa el correo']) !!}
</div>
<div class="form-group">
    {!! Form::label('contraseña', 'Password:') !!}
    {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Ingresa la contraseña']) !!}
</div>
