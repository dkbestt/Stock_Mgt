@extends('layout')

@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-md-6">

            <form action="{{ route('update_mer.put', $edit_mer->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$edit_mer->name}}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{$edit_mer->email}}">
                </div>
                <div class="form-group">
                    <label for="mobile_no">Mobile No.</label>
                    <input type="text" class="form-control" id="mobile_no" name="mobile_no" value="{{$edit_mer->mobile_no}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('view_merchant') }}"><button type="button" class="btn btn-primary">Back</button></a>

            </form>
        </div>
    </div>
</div>


@endsection