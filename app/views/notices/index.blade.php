@extends('layouts.back')

@section('content')

    @include('partials/_tableIndex',
        [
            'header'        => 'Noticias',
            'model'         => 'notices',
            'input_array'   => $notices,
            'title'         => 'title'
        ]
    )

@stop