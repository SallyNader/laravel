@extends('app')

@section('content')


@foreach($comments as $s)

{{$s->body}} --------------->Posted By <strong> {{$s->poster['name']}}</strong>
<br />
@endforeach
@stop