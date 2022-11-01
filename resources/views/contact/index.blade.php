@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 align="center">Customer Contact Information</h1>
        <a href="/contact/create" class="btn btn-primary my-2">Create</a>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">USERNAME</th>
                    <th scope="col">PASSWORD</th>
                    <th scope="col">NAME</th>
                    <th scope="col">SURNAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">EDIT</th>
                    <th scope="col">DELETE</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                        <tr>
                        <th scope="row">{{$row->id}}</th>
                        <td>{{$row->username}}</td>
                        <td>{{$row->password}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->surname}}</td>
                        <td>{{$row->email}}</td>
                        <td>
                        <a href="{{route('contact.edit', $row->id)}}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <form action="{{route('contact.destroy', $row->id)}}" method="post">
                                @csrf @method('DELETE')
                                <input type="submit", value="Delete" class="btn btn-danger" 
                                onclick="return confirm('Confirm for Delete Customer {{$row->name}} ?')">
                            </form>
                        </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
    </div>
@endsection