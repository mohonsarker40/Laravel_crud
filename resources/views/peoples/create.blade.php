@extends('peoples.layout')
@section('content')
    <div class="card m-5">
        <div class="card-header">Create New People Information</div>
        <form class="p-5" action="{{ route('people.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" placeholder="Enter name" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="nid">NID:</label>
                <input type="number" class="form-control" placeholder="Enter NID" id="nid" name="nid"  required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="phone" class="form-control" placeholder="Enter phone number" id="phone" name="phone" required>
            </div>

            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection