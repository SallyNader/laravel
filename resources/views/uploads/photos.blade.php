@extends('app')
@section('content')
<div class="col-md-9">
<fieldset>

{!!Form::open(array('url'=>'upload/upload','files'=>true))!!}

Write Comment On Image : <input type="text" name="comment" class="form-control"   />
   <input type="file" name="multi[]" multiple="" class="form-control" />

{!!Form::submit('Go',['class'=>'btn btn-success'])!!}

{!!Form::close()!!}
</fieldset>
</div>
@stop