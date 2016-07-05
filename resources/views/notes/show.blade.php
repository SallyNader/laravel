@extends('app')

@section('content')
@foreach($page as $index=>$p)

{{$p->body}} <strong>In Page</strong> {{$title->title}}

<br />
@endforeach


@stop