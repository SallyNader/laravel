@extends('app')

@section('content')


@foreach($poster as $post)

ID:{{$post->id}}---->>>> Name:{{$post->poster['name']}}-->>>>>>Comment:{{$post->body}}
<br />
@endforeach
@stop