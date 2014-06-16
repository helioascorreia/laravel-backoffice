@extends('layouts.back')

@section('content')

    <h1>Noticias</h1>
    <p>{{link_to_create_fa('notices')}}</p>

    <table class="table">
        <thead style="background: #333333; color: #ffffff" class="">
            <tr>
                <th>Title</th>
                <th>Options</th>
            </tr>
        </thead>
            @foreach($notices as $notice)
            <tr>
                <td>{{$notice->title}}</td>
                <td>
                    {{link_to_show_fa('notices', $notice->id)}}
                    {{link_to_edit_fa('notices', $notice->id)}}
                    {{link_to_delete_fa('notices', $notice->id)}}
                </td>
            </tr>

            @endforeach
        <tbody>

        </tbody>
    </table>



    {{$notices->links()}}
@stop