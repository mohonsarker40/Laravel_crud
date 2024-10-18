@extends('peoples.layout')
@section('content')
    <div class="container">
        <div class="row m-5">
            <div class="col-12">
                <div class="card p-5">

                    <div class="card-header">
                        <h2>Laravel CRUD</h2>
                    </div>

                    <div class="card-body">
                        <a href="{{ route('people.create') }}" class="btn btn-primary mb-5" title="Add new student">Add
                            now</a>
                        <div class="table-responsive">
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
                                @foreach($people as $key => $p)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $p->name }}</td>
                                        <td>{{ $p->nid }}</td>
                                        <td>{{ $p->phone }}</td>

                                        <td>

                                            <a href="" title="edit
                                            student" aria-hidden="true">
                                                <button class="btn btn-warning">Edit</button>
                                            </a>

                                            <a href=""  title="delete
                                            student" aria-hidden="true">
                                                <button class="btn btn-danger">Delete</button>
                                            </a>
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