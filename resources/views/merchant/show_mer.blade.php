@extends('layout')

@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card-header text-center font-weight-bold">
                    {{$single_mer->name}}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$single_mer->email}}</h5>
                    <p class="card-text">{{$single_mer->mobile_no}}</p>
                    <a href="{{ route('view_merchant') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>

    <h1>All products stock</h1>
    <div class="row">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">product Name</th>
                    <th scope="col">price</th>
                    <th scope="col">qty</th>
                </tr>
            </thead>
            <tbody>
                @foreach($all_items as $product)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->qty }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



@endsection