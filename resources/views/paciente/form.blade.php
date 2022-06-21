<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('documento del paciente') }}
            {{ Form::text('documento', $paciente->documento, ['class' => 'form-control mb-3' . ($errors->has('documento') ? ' is-invalid' : ''), 'placeholder' => 'Documento']) }}
            {!! $errors->first('documento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo de Documento') }}
            {{ Form::text('tipoDocumento', $paciente->tipoDocumento, ['class' => 'form-control mb-3' . ($errors->has('tipoDocumento') ? ' is-invalid' : ''), 'placeholder' => 'Tipodocumento']) }}
            {!! $errors->first('tipoDocumento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre del paciente') }}
            {{ Form::text('nombre', $paciente->nombre, ['class' => 'form-control mb-3' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidos del paciente') }}
            {{ Form::text('apellidos', $paciente->apellidos, ['class' => 'form-control mb-3' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion del paciente') }}
            {{ Form::text('direccion', $paciente->direccion, ['class' => 'form-control mb-3' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono del paciente') }}
            {{ Form::text('telefono', $paciente->telefono, ['class' => 'form-control mb-3' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('genero del paciente') }}
            {{ Form::text('genero', $paciente->genero, ['class' => 'form-control mb-3' . ($errors->has('genero') ? ' is-invalid' : ''), 'placeholder' => 'Genero']) }}
            {!! $errors->first('genero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha de Nacimiento') }}
            {{ Form::date('fechaNacimiento', $paciente->fechaNacimiento, ['class' => 'form-control' . ($errors->has('fechaNacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fechanacimiento']) }}
            {!! $errors->first('fechaNacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado Civil del paciente') }}
            {{ Form::text('estadoCivil', $paciente->estadoCivil, ['class' => 'form-control' . ($errors->has('estadoCivil') ? ' is-invalid' : ''), 'placeholder' => 'Estadocivil']) }}
            {!! $errors->first('estadoCivil', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>