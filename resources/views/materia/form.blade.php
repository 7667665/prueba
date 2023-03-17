<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idNotas') }}
            {{ Form::text('idNotas', $materia->idNotas, ['class' => 'form-control' . ($errors->has('idNotas') ? ' is-invalid' : ''), 'placeholder' => 'Idnotas']) }}
            {!! $errors->first('idNotas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idPeriodo') }}
            {{ Form::text('idPeriodo', $materia->idPeriodo, ['class' => 'form-control' . ($errors->has('idPeriodo') ? ' is-invalid' : ''), 'placeholder' => 'Idperiodo']) }}
            {!! $errors->first('idPeriodo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idCurso') }}
            {{ Form::text('idCurso', $materia->idCurso, ['class' => 'form-control' . ($errors->has('idCurso') ? ' is-invalid' : ''), 'placeholder' => 'Idcurso']) }}
            {!! $errors->first('idCurso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idestudiante') }}
            {{ Form::text('idestudiante', $materia->idestudiante, ['class' => 'form-control' . ($errors->has('idestudiante') ? ' is-invalid' : ''), 'placeholder' => 'Idestudiante']) }}
            {!! $errors->first('idestudiante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota3') }}
            {{ Form::text('nota3', $materia->nota3, ['class' => 'form-control' . ($errors->has('nota3') ? ' is-invalid' : ''), 'placeholder' => 'Nota3']) }}
            {!! $errors->first('nota3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota2') }}
            {{ Form::text('nota2', $materia->nota2, ['class' => 'form-control' . ($errors->has('nota2') ? ' is-invalid' : ''), 'placeholder' => 'Nota2']) }}
            {!! $errors->first('nota2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota1') }}
            {{ Form::text('nota1', $materia->nota1, ['class' => 'form-control' . ($errors->has('nota1') ? ' is-invalid' : ''), 'placeholder' => 'Nota1']) }}
            {!! $errors->first('nota1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date') }}
            {{ Form::text('date', $materia->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Date']) }}
            {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>