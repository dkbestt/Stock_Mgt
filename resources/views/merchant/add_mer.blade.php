@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('login.post') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="mobile_no">Mobile No.</label>
                    <input type="text" class="form-control" id="mobile_no" placeholder="Mobile Number">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('view_merchant') }}"><button type="button" class="btn btn-primary">Back</button></a>
            </form>
        </div>
    </div>
</div>

@endsection