@extends('app')
@section('content')

@if($errors->has())
   @foreach ($errors->all() as $error)
      <div>{{ $error }}</div>
  @endforeach
@endif

{!!Form::open(['url'=>'upload/update','method'=>'PUT' ,'files' => true])!!}
{!!Form::text('comment',$comment->comment)!!}
{!!Form::token()!!}
{!!Form::hidden('id',$comment->id)!!}
{{Form::file('one')}}
{!!Form::submit()!!}
{!!Form::close()!!}
@stop