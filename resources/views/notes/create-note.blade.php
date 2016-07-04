@extends('app')
@section('content')
{!!Form::open(array('url'=>'note/add'))!!}
{!!Form::label('label','Write Note')!!}
{!!Form::text('note')!!}

{!!Form::label('label','Write Page Title')!!}
{!!Form::text('page')!!}
{!!Form::submit()!!}

{!!Form::close()!!}

@stop