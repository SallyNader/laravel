@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                    <br />
                    @if(Auth::check())
                   congrats  you are logged ;)
                    @endif

            @can('edit_topic')
            <a href="">Edit Topic</a>
						@endcan
						@can('delete_topic')
						<a href="">Delete Topic</a>
						@endcan


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
