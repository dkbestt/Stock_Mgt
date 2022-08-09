@extends('layout')

@section('content')

<div class="container">
    <div class="row my-2">
        <div class="col-md-10">
            <h3>Product List</h3>
        </div>
        <div class="col-md-2">
            <a href="{{route('add_product')}}"><button class="btn btn-primary">Add Product</button></a>
        </div>
    </div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Mercahnt</th>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Qty</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach($product as $p)
            <tr>
                <th>{{ $loop->iteration }}</th>
                <td>{{ $p->merchant->name }}</td>
                <td>{{ $p->product_name }}</td>
                <td>{{ $p->price }}</td>
                <td>{{ $p->qty }}</td>
                <td>
                    <form action="" method="POST">
                        <a href="" class="btn btn-info">Edit</a>
                        <a href="" class="btn btn-secondary">Show</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
@endsection