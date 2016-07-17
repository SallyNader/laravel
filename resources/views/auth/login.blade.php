@extends('app')

@section('content')
{!!Form::open(['url'=>'auth/login'])!!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<label class="col-md-4 control-label">E-Mail Address</label>

								<input type="email" class="form-control" name="email" value="{{ old('email') }}">


							<label class="col-md-4 control-label">Password</label>

								<input type="password" class="form-control" name="password">


										<input type="checkbox" name="remember"> Remember Me
					{!!Form::submit()!!}
										{!!Form::close()!!}