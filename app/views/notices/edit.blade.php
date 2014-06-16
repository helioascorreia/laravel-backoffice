@extends('layouts.back')

@section('content')
{{ Form::model($notice, ['method' => 'PATCH', 'route' => ['notices.update', $notice->id]]) }}

    {{ Form::hidden('id', $notice->id)}}

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
        {{ Form::submit('editar', ['class' => 'btn btn-default']) }}
    </div>

{{ Form::close() }}
@stop