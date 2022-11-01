@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 aligh="center">Create Customer</h1>
        @if ($errors->all())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        @endif
        {!! Form::open(['action' => 'ContactController@store', 'method'=>'POST']) !!}
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('Username') !!}
                    {!! Form::text('username',null,["class"=>"form-control"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Password') !!}
                    {!! Form::text('password',null,["class"=>"form-control"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Name') !!}
                    {!! Form::text('name',null,["class"=>"form-control"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Surname') !!}
                    {!! Form::text('surname',null,["class"=>"form-control"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Email') !!}
                    {!! Form::text('email',null,["class"=>"form-control"]) !!}
                </div>
                <input type="submit" value="Submit" class="btn btn-success">
                <a href="/contact" class="btn btn-secondary">Back</a>
        </div>  
        {!! Form::close() !!}
    </div>
@endsection