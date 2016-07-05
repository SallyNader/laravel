@extends('app')
@section('content')
@foreach($notes as $n)

{{$n->body}} In Page :<strong>{{$n->page['title']}}</strong>
<br />
@endforeach
@stop