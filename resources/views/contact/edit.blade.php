
@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 aligh="center">Edit Customer</h1>
        @if ($errors->all())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        @endif
        {!! Form::open(['action' => ['ContactController@update',$data->id], 'method'=>'PUT']) !!}
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('Username') !!}
                    {!! Form::text('username',$data->username,["class"=>"form-control"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Password') !!}
                    {!! Form::text('password',$data->password,["class"=>"form-control"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Name') !!}
                    {!! Form::text('name',$data->name,["class"=>"form-control"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Surname') !!}
                    {!! Form::text('surname',$data->surname,["class"=>"form-control"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Email') !!}
                    {!! Form::text('email',$data->email,["class"=>"form-control"]) !!}
                </div>
                <input type="submit" value="Update" class="btn btn-success">
                <a href="/contact" class="btn btn-secondary">Back</a>
        </div>  
        {!! Form::close() !!}
    </div>
@endsection