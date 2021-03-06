
@extends('templates.base')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Contact</div>

                <div class="panel-body">
                  {{ Form::open(['url' => '/contact']) }}
                    {{ Form::label('name', 'Name') }}
                    {{ Form::text('name') }}
                    {{ Form::label('content', 'Message') }}
                    {{ Form::textarea('content') }}
                    {{ Form::submit('Submit')}}
                  {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
