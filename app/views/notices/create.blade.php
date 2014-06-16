@extends('layouts.back')

@section('content')
{{ Form::open(['route' => 'notices.store']) }}
<!-- Title Form Group input -->
<div class="form-group">
    {{ Form::label('title', 'Title:') }}
    {{ Form::text('title', null, ['class' => 'form-control']) }}
    {{ $errors->first('title', '<span class="error">:message</span>') }}
</div>
<!-- Body Form Group input -->
<div class="form-group">
    {{ Form::label('body', 'Body:') }}
    {{ Form::textarea('body', null, ['class' => 'form-control']) }}
    {{ $errors->first('body', '<span class="error">:message</span>') }}
</div>

<!-- Submit Form Group input -->
<div class="form-group">
    {{ Form::submit('enviar', ['class' => 'btn btn-default']) }}
</div>


{{ Form::close() }}
@stop