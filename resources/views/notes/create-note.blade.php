<title>@if(!empty($title)){{$title}}@else home site @endif</title>
@extends('app')
@section('content')

<div class="col-md-9">
{!!Form::open(array('url'=>'note/add'))!!}
<div class="form-group" @if($errors->has('note')) has-error @endif>

{!!Form::label('label',trans('home.writenote'))!!}
{!!Form::text('note',old('note'),['class'=>'form-control','placeholder'=>trans('home.writenote')])!!}
<p class="help-block">{{$errors->first('note')}}</p>
</div>
<div class="form-group" @if($errors->has('page')) has-error @endif>

{!!Form::label('label',trans('home.Write Page Title'))!!}
{!!Form::text('page',old('page'),['class'=>'form-control','placeholder'=>trans('home.Write Page Title')])!!}
<p class="help-block">{{$errors->first('page')}}</p>
</div>

{!!Form::submit(trans('home.submit'),['class'=>'btn btn-success'])!!}
{!!Form::close()!!}
<a  href="{{url('note/showall')}}"   class="btn btn-info">{{trans('home.Show All Notes')}}</a>
</div>

@stop
