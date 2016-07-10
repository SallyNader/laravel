@extends('app')
@section('content')


{!!Form::open(['url'=>'upload/update','method'=>'PUT'])!!}
{!!Form::text('comment','comment')!!}
  <input type="file" name="multi[]" multiple="" class="form-control" />
{!!Form::submit()!!}
{!!Form::close()!!}
@stop