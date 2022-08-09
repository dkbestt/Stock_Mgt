@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('add_product.post') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="m_id">Merchant</label>
                    <select id="m_id" name="m_id" class="form-select" aria-label="Default select example">
                        <option selected disabled>Select Merchant</option>
                        @foreach($merchant as $mer)
                        <option value="{{ $mer->id }}">{{ $mer->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="product Name">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="price">
                </div>
                <div class="form-group">
                    <label for="qty">Qty</label>
                    <input type="text" class="form-control" id="qty" name="qty" placeholder="qty">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('view_product') }}"><button type="button" class="btn btn-primary">Back</button></a>
            </form>
        </div>
    </div>
</div>

@endsection