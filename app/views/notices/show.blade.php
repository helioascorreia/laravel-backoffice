@extends('layouts.back')

@section('content')
    <h1>{{$notice->title}}</h1>
    <p>{{$notice->body}}</p>

    <a href="/notices">Voltar</a>
@stop