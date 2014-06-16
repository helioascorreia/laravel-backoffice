<?php

function link_to_fa($id, $title = '')
{
    return link_to('route', $title, ['class' => 'fa fa-pencil']);
}

function link_to_route_fa($id, $title = '')
{
    return link_to_route('route', $title, [$id], ['class' => 'fa fa-pencil']);
}

function link_to_create_fa($controller, $title = '')
{
    return link_to_action(ucfirst($controller).'Controller@create', $title, null,['class' => 'fa fa-plus']);
}

function link_to_edit_fa($controller, $id,$title = '')
{
    return link_to_action(ucfirst($controller).'Controller@edit', $title, [$id],['class' => 'fa fa-pencil']);
}

function link_to_show_fa($controller, $id,$title = '')
{
    return link_to_action(ucfirst($controller).'Controller@show', $title, [$id],['class' => 'fa fa-eye']);
}

function link_to_delete_fa($link, $id, $title = '')
{
    return link_to(
        $link . '/' . $id,
        $title, [
            'data-method'  => "delete",
            'data-confirm' => 'Are you sure?',
            'class'        => 'fa fa-times'
        ]);
    //<a href="notices/{{$notice->id}}" data-method="delete" data-confirm="Are you sure?">x</a>
}

function link_to_action_fa($controller, $route, $icon ,$title = '', $id = null)
{
    return link_to_action(ucfirst($controller).'Controller@'.$route, $title, [$id], ['class' => "fa fa-$icon", "_method"=>"delete"]);
    //echo link_to_action('HomeController@getIndex', $title, $parameters = array(), $attributes = array());
}
