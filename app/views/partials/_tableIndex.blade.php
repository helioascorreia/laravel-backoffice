<h1>{{$header}}</h1>
<p>{{link_to_create_fa($model)}}</p>

<table class="table">
    <thead style="background: #333333; color: #ffffff" class="">
    <tr>
        <th>Title</th>
        <th>Options</th>
    </tr>
    </thead>
    @foreach($input_array as $row)
    <tr>
        <td>{{$row->$title}}</td>
        <td>
            {{link_to_show_fa($model, $row->id)}}
            {{link_to_edit_fa($model, $row->id)}}
            {{link_to_delete_fa($model, $row->id)}}
        </td>
    </tr>

    @endforeach
    <tbody>

    </tbody>
</table>

{{$input_array->links()}}

 