@extends('layout')

@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card-header text-center font-weight-bold">
                    {{$single_worker->name}}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$single_worker->email}}</h5>
                    <p class="card-text">{{$single_worker->mobile_no}}</p>
                    <a href="{{ route('view_worker') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection