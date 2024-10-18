@extends('peoples.layout')
@section('index')
    <div class="container">
        <div class="row m-5">
            <div class="col-12">
                <div class="card p-5">

                    <div class="card-header">
                        <h2>Laravel CRUD</h2>
                    </div>

                    <div class="card-body">
                        <a href="{{ url('/people/create') }}" class="btn btn-primary" title="Add new student">Add
                            now</a>
                        <div class="table-response">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>Id</td>
                                        <td>Name</td>
                                        <td>NID</td>
                                        <td>Phone</td>
                                        <td>Actions</td>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($peoples as $people)
                                    <tr>
{{--                                        <td>Id</td>--}}
                                        <td>{{ $people.name }}</td>
                                        <td>{{ $people.nid }}</td>
                                        <td>{{ $people.phone }}</td>

                                        <td>
                                            <a href="" class="btn btn-primary" title="show student"
                                               aria-hidden="true"><button class="btn btn-primary">Show</button></a>

                                            <a href="" class="btn btn-warning" title="edit student"
                                               aria-hidden="true"><button class="btn btn-primary">Edit</button></a>

                                            <a href="" class="btn btn-danger" title="delete student"
                                               aria-hidden="true"><button class="btn btn-primary">Delete</button></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endsection